$.fn.MediaUploader = function( options ){

    var mediaInputLinked;
    var mediaKey_s;
    var mediaWithThumbnail = false;
    var isGallery = false;
    var thisMedia;

    $("body").on('click','.OpenSiteMediaModal-----div',function(){
        thisMedia = $(this);
        $('#siteMediaModal-----div').modal('show');
        mediaInputLinked = $(this).attr('data-media-input-linked');
        mediaWithThumbnail = $(this).attr('data-with-thumbnail');

        if( $(this).attr('data-uploader-type') == 'gallery' ){
            isGallery = true;
        }
        return false;
    });


    $('#siteMediaModal-----div').on('show.bs.modal', function (event) {

        $("#attachments--ul").load(options.allMediaUrl,function(){
            $(".load-more-buttons").html('<button data-url="" id="load-more-media" class="btn btn-accent m-btn m-btn--air m-btn--custom">تحميل المزيد</button>');
        })

        $(".file-quick-preview-here").html(''); 

        $('body').on('click',".attachments--ul--li",function(k){
            var status = $(this).find("input").is(':checked');
            if(!isGallery){
                $(".attachments--ul--li").removeClass('active');
                $(".attachments--ul--li").find("input").prop('checked','')
            }

            if( status ){        
                $(this).addClass('active');
                $(this).find("input").prop('checked','checked')
            }else{
                $(this).removeClass('active');
                $(this).find("input").prop('checked','')
            }

            var filename = $( this ).attr('data-filename');
            var src = $( this ).attr('data-src');
            var id = $( this ).attr('data-post-id');
            var size = $( this ).attr('data-size');
            var width = $( this ).attr('data-width');

            var Prv = `<div class="file-quick-preview-here">
                        <h4>تفاصيل المرفق</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <img src="`+ src +`">
                                <div class="data---">
                                    <h3>`+ filename +`</h3>
                                    <h4>`+ size +`</h4>
                                    <h4>`+ width +` </h4>
                                    <h4><a href="" data-f-id="`+id+`" class="delete">حذف بشكل دائم</a></h4>
                                </div>
                                <div class="clearfix"></div>
                                <h3>رابط مباشر</h3>

                                <input type="text" class="form-control" value="`+ src +`">
                            </div>
                        </div>
                    </div>`;
            if( status ){  
                $(".attachment-preview-area--left").html( Prv );
                $("#siteMediaModal-----div .modal-footer button").removeAttr('disabled');
            }else{
                $(".attachment-preview-area--left").html('');
                $("#siteMediaModal-----div .modal-footer button").attr('disabled','disabled');
            }

        });




        $("#siteMediaModal-----div .nav-tabs li a").click(function(){
            $("#siteMediaModal-----div .nav-tabs li a").removeClass('active');
            $(this).addClass('active')

            $("#siteMediaModal-----div .tab-pane").removeClass('active');
            $($(this).attr('href')).addClass('active')
            return false;
        });

    })


    $('body').on('click','.file-quick-preview-here .delete',function(){
        if( confirm('هل تريد بالفعل حذف الملف المحدد ؟') ){
            var id = $(this).attr('data-f-id');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': csrf_token
                },
                url: options.deleteMediaUrl + '/' + id ,
                data: { 'id':id },
                processData: false,
                type: 'POST',
                contentType: false,
                success: function (data){
                    $("#demo-file" + id).remove();
                    $(".attachment-preview-area--left").html('');
                }
            });
        }
        return false;
    });

    $("#siteMediaModal-----div .modal-footer button").click(function(){
        var idsSelected = $('#siteMediaModal-----div .attachments--ul--li input[type="checkbox"]:checked').map(function(){
            return $(this).val();
        }).get().join();

        var urlsSelected = $('#siteMediaModal-----div .attachments--ul--li input[type="checkbox"]:checked').map(function(){
            return $(this).attr('data-img-src');
        }).get().join();


        if(isGallery){
            var URLS_F = urlsSelected.split(',');
            var HTMLOUT = '';
            var oldIds = $( "."+mediaInputLinked + "-div ." + mediaInputLinked ).val();
            if(oldIds){
                var oldAndNewIds = oldIds + ',' + idsSelected;
            }else{
                var oldAndNewIds = idsSelected;
            }
            var idsArray = idsSelected.split(",");
            var nn = $("."+mediaInputLinked).attr('name');

            $.each( URLS_F, function( index, value ) {
                HTMLOUT += '<div id="thumbz-flex-'+idsArray[index]+'" class="thumbz-flex withThumbnailChecker"><label><a data-m-id="'+idsArray[index]+'" data-key="'+mediaInputLinked+'" class="fa fa-trash"></a><img data-id="'+idsArray[index]+'" src="'+value+'" /><input type="radio" name="'+mediaInputLinked+'_thumbnail" value="'+idsArray[index]+'"></label></div>';
            });
            

            $( "."+mediaInputLinked + "-div ." + mediaInputLinked ).val(oldAndNewIds);
            $( "."+mediaInputLinked + "-div .imageAreaPreview" ).append(HTMLOUT);

            if( $("."+mediaInputLinked + "-div .imageAreaPreview .thumbz-flex.withThumbnailChecker.active").length == 0 ){
                $( "."+mediaInputLinked + "-div .imageAreaPreview #thumbz-flex-" + idsArray[0] + " label").click();
            }

        }else{
            thisMedia.addClass('singleEdit').find('i').removeClass().addClass('fa fa-pencil-square ');
            $( "."+mediaInputLinked + "-div ." + mediaInputLinked ).val(idsSelected);
            $( "."+mediaInputLinked + "-div .imageAreaPreview" ).html('<div id="thumbz-flex-'+idsSelected+'" class="thumbz-flex"><a data-m-id="'+idsSelected+'" data-key="'+mediaInputLinked+'" class="fa fa-trash"></a><img data-id="'+idsSelected+'" src="'+urlsSelected+'" /></div>');
        }
        $('#siteMediaModal-----div').modal('hide');
        return false;
    })

    // delete img from page gallery
    $("body").on('click' ,'.imageAreaPreview a.fa-trash',function(){
        var dataKey = $(this).attr('data-key');
        var id = $(this).attr('data-m-id');
        $("."+dataKey+"-div #thumbz-flex-" + id ).remove();
        if( $("."+dataKey+"-div .imageAreaPreview .thumbz-flex").length == 0 ){
            $("."+dataKey+"-div .OpenSiteMediaModal-----div").removeClass('singleEdit');
            $("."+dataKey+"-div .OpenSiteMediaModal-----div i").removeClass('fa fa-pencil-square').addClass('flaticon-add');
        }
        var ids = $("." + dataKey ).val();
        var idds = ids.split(',');
        var newArr = $(idds).not([id]).get();
        $("." + dataKey ).val(newArr);
        return false;
    });

    $('#siteMediaModal-----div').on('hidden.bs.modal', function (event) {
        mediaInputLinked = '';
        isGallery = false;
    });

    $("body").on('click','.thumbz-flex.withThumbnailChecker',function(){
        $(this).parent().find('.thumbz-flex.withThumbnailChecker').removeClass('active');
        $(this).addClass('active');
    });


    // sortable
    $( ".imageAreaPreview" ).sortable({
        placeholder: "ui-state-highlight",
        update: function( event, ui ) {
            

            var newSorts = $(this).find('.thumbz-flex').map(function(){
                return $(this).attr('id').replace('thumbz-flex-','');
            }).get().join();

            $(this).parent().find('.final-media-ids').val(newSorts);

        }
    });

    $('#drag-and-drop-zone').dmUploader({
        url: options.MediaUploadUrl ,
        dataType: 'json',
        allowedTypes: '*',
        onBeforeUpload: function(id){
            $("#demo-file" + id).find("span.demo-file-status").html('Uploading...').addClass("demo-file-status-default");
        },
        onNewFile: function(id, file) {            
            $('a[href="#media-library--area"]').click();
            var f = `<li class="attachments--ul--li" id="demo-file` + id + `" data-src="" data-post-id="" data-size="" data-width="">
                        <div class="attachments--ul--li--div">
                            <div class="thumbnail">
                                <div class="progress progress-striped active"><div class="progress-bar" role="progressbar" style="width: 0%;"><span class="sr-only">0% Complete</span></div></div>
                                <img src="" alt="">
                                <div class="media---title-"></div>
                                <input type="checkbox" name="attachment[]" value="" data-img-src="">
                            </div>
                        </div>
                    </li>`;

            var id = $('#attachments--ul').attr("file-counter");
            if (!id) {
               // b(g).empty();
                id = 0
            }
            id++;
            $('#attachments--ul').attr("file-counter", id);
            $('#attachments--ul').prepend(f)
        },
        onUploadProgress: function(id, percent){
            var percentStr = percent + '%';
            $("#demo-file" + id).find("div.progress-bar").width(percentStr);
            $("#demo-file" + id).find("span.sr-only").html(percentStr + " Complete")
        },
        onUploadSuccess: function(id, data){
            if( data.type != 'image/png' && data.type != 'image/jpeg' && data.type != 'image/gif' && data.type != 'image/bmp' ){
                $( "#demo-file" + id ).find('img').attr( 'class' , 'icon' );
            }
            $( "#demo-file" + id ).find('img').attr( 'src' , data.src );
            $( "#demo-file" + id ).find('.media---title-').html( data.name );
            $( "#demo-file" + id ).find('input').attr( 'data-img-src' , data.src );

            $( "#demo-file" + id ).attr( 'data-filename' , data.name );
            $( "#demo-file" + id ).attr( 'data-src' , data.src );
            $( "#demo-file" + id ).attr( 'data-post-id' , data.id );
            $( "#demo-file" + id ).attr( 'data-size' , data.size );
            $( "#demo-file" + id ).attr( 'data-width' , '500 X 300' );
            $( "#demo-file" + id + " .progress").hide();

            $( "#demo-file" + id + " input").click().val( data.id );
        },
        onUploadError: function(id, message){
            $("#demo-file" + id).find("span.demo-file-status").html(message).addClass("demo-file-status-error");
            $( "#demo-file" + id ).remove();
            alert(message);
        },
    });

    var i = 2;
    $("body").on('click','#load-more-media',function(){
        var url = $(this).attr('data-url');
        $.ajax({
            type: 'get', // or post?
            url: options.allMediaUrl + 'page=' + i,
            data: $( this ).serialize(),
            success: function(data) {
                $("#attachments--ul").append(data)
                i++;
            },
            error: function(xhr, textStatus, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });



    });


}

