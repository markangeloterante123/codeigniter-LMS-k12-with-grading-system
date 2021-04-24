chat_users();
       function chat_users(){
          var id = $("input[name='userid']").val();
           $.ajax({
              url:'<?=base_url()?>index.php/pages/chat_user',
              type: 'POST',
              data:{id:id},
              dataType : "JSON",
              error: function() {
                      alert('Chat Display');
                   },
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      html +=
                      '<div class="user-block">'+
                        '<img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image">'+
                        '<span class="username">'+
                          '<a href="javascript:void(0)" class="openchat" data-msg_id="'+data[i].chat_code+'" data-id="'+data[i].id+'" style="font-size:22px;" href="#">'+data[i].name+' '+
                            '<i class="nav-icon far fa-comments text-success">('+data[i].new+')</i>'+
                          '</a>'+
                        '</span>'+
                      '</div><br><hr>'
                      ;
                    }
                $('.chat-logs').html(html);
              }
            });
        } 
      $("#chat-circle").click(function() {
        var html = 
        '<a ><i class="nav-icon fas fa-users"></i> List of students and Admins</a>'
        ;
        $('.titleBox').html(html);
        $('.chat-input').html('');
        $('[name="chat_mode"]').val('1');
        $("#chat-circle").toggle('scale');
        $(".chat-box").toggle('scale');
      });
      
      $(".chat-box-toggle").click(function() {
        $('[name="chat_mode"]').val('1');
        $("#chat-circle").toggle('scale');
        $(".chat-box").toggle('scale');
      });

      $('.titleBox').on('click','.show_chat_def',function (){
        var html = 
        '<a ><i class="nav-icon fas fa-users"></i> List of students and Admins</a>'
        ;
        $('.titleBox').html(html);
        $('.chat-input').html('');
        $('.cancelbtn').html('<span aria-hidden="true">&times;</span>');
        $('[name="chat_mode"]').val('1');
        chat_users();
      });
      // show_users();
     

      $('.chat-logs').on('click','.openchat',function (){
        var id = $(this).data('id');
        $('[name="chat_id"]').val(id);
        var code = $(this).data('msg_id');
        $('[name="chat_code"]').val(code);
        $('.chat-logs').html('');
        var input =
        '<input style="color:white; border:solid 1px black; background-image: linear-gradient(to  right, #800000, #CC3300);" type="text" name="chat-input" id="chat-input" placeholder="Send a message..."/>'+
        '<a href="javascript:void(0)" class="btn btn-block btn-success sentMessage">Send</a>';
        $('.chat-input').html(input);
        var setting = '<h4><a href="javascript:void(0)" class=""><i class="far fas fa-cog nav-icon"></i></a></h4>';
        $('.cancelbtn').html(setting);
        $('[name="chat_mode"]').val('2');
        display_chat_users();
      });

      $('.chat-input').on('click','.sentMessage',function (){
       var id = $("input[name='chat_code']").val();
       var name=$("input[name='name']").val(); 
       var profile=$("input[name='profile']").val(); 
       var userid=$("input[name='userid']").val(); 
       var text=$("input[name='chat-input']").val(); 
        $.ajax({
              url:'<?=base_url()?>index.php/pages/user_chat_sent',
              type: 'POST',
              data:{id:id, name:name, profile:profile, userid:userid,text:text},
              dataType : "JSON",
              error: function() {
                      alert('Display User Errors');
                   },
              success: function (data) {
                    $('[name="chat-input"]').val('');
                    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);
              }
            });
      });

      function display_chat_users(){
        var id = $("input[name='chat_id']").val();
           $.ajax({
              url:'<?=base_url()?>index.php/pages/user_chat',
              type: 'POST',
              data:{id:id},
              dataType : "JSON",
              error: function() {
                      alert('Display User Errors');
                   },
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      html +=
                      '<div class="user-block">'+
                        '<img style="margin-left:10px;" class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image">'+
                        '<span class="username">'+
                          '<p style="margin-left:5px;color:white;font-size:24px;">'+data[i].fullname+'</p>'+
                        '</span>'+
                      '</div>'+
                      '<a href="javascript:void(0)" class="show_chat_def"><h3><i class="fas fa-users nav-icon"></i></h3></a>'
                      ;
                    }
                $('.titleBox').html(html);
              }
            });
      }

      function show_users(){
          var name = $("input[name='search_text']").val();
           $.ajax({
              url:'<?=base_url()?>index.php/pages/fetch',
              type: 'POST',
              data:{name:name},
              dataType : "JSON",
              error: function() {
                      alert('Display Errors');
                   },
              success: function (data) {
                var html = '';
                  for(i=0; i<data.length; i++){
                      html +=
                      '<div class="user-block">'+
                        '<img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="user image">'+
                        '<span class="username">'+
                          '<a style="font-size:22px;" href="#">'+data[i].fullname+' '+' <i class="fas fa-plus text-success"></i>'+'</a>'+
                        '</span>'+
                      '</div><br><hr>'
                      ;
                    }
                $('.chat-logs').html(html);
              }
            });
        }

       $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
              $('[name="chat_mode"]').val('1');
             show_users();
            }
            else
            {
              $('[name="chat_mode"]').val('2');
              chat_users();
            }
         });
       
       function chat_message(){
          var code = $("input[name='chat_code']").val();
          var ids = $("inpur[name='userid']").val();
           $.ajax({
              url:'<?=base_url()?>index.php/pages/chat_message',
              type: 'POST',
              data:{code:code, ids:ids},
              dataType : "JSON",
              error: function() {
                      alert('Display Errors');
                   },
              success: function (data) {
                var html = '';
                var i;
                  for(i=0; i<data.length; i++){
                      if (data[i].sent_id != ids){
                        html +=
                        '<div class="direct-chat-msg">'+
                          '<div class="direct-chat-infos clearfix">'+
                            '<span class="direct-chat-timestamp float-right">'+data[i].date+'</span>'+
                          '</div>'+
                          '<img class="direct-chat-img" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="message user image">'+
                          '<div class="direct-chat-text">'+data[i].message+''+
                          '</div>'+
                        '</div>';
                      }
                      else{
                        html +=
                        '<div class="direct-chat-msg right">'+
                          '<div class="direct-chat-infos clearfix">'+
                            '<span class="direct-chat-timestamp float-left">'+data[i].date+'</span>'+
                          '</div>'+
                          '<img class="direct-chat-img" src="<?php echo base_url(); ?>assets/img/'+data[i].profile+'" alt="message user image">'+
                          '<div class="direct-chat-text">'+data[i].message+'</div>'+
                        '</div>';
                      }
                    }
                $('.chat-logs').html(html);
                
              }
            });
        }

     setInterval(function(){
        var mode = $("input[name='chat_mode']").val();
        if(mode == '2'){
          chat_message();
        }
      }, 2000) 