      $(document).ready(function(){
        $("#nav-btn").click(function(){
            $(".navbar").addClass("open-nav");
            $(this).css("z-index", "-1");
        });
        $("#nav-close").click(function(){
            $(".navbar").removeClass("open-nav");
            $("#nav-btn").css("z-index", "2");
        });
        $("#navbar-logo").click(function(){
            location.reload();
        });
      });