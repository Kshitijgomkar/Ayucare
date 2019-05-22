<?php
    class Connection{
        function connect(){
            return new mysqli("localhost","root","","ayucare");
        }
    }
    
?>