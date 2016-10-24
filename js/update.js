<script>
        $(".contentContainer").css("min-height", $(window).height());
        $("textarea").css("height", $(window).height()-120);
        $("textarea").keyup(function() {
            $.post("updatediary.php", {diary:$("textarea").val()});
        });
</script>
