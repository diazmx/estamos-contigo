<script>
    function gotopaso2(){
        document.getElementById("paso1").style.display = "none";
        document.getElementById("paso2").style.display = "block";
    }
    
    function backtopaso1(){
        document.getElementById("paso1").style.display = "block";
        document.getElementById("paso2").style.display = "none";
    }
    
    $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('.modal').modal();
        $('.tooltipped').tooltip();
    });
</script>