<?php
    function inputElement($icon, $placeholder, $name, $value){
        $ele ="
            <div class=\"input-group mb-2\">
            <div class=\"input-group-prepend\">
                <div class=\"input-group-text\">$icon </div>
             </div>
             <input class=\"form-control\" autocomplete=\"off\" name='$name' value='$value' id=\"inlineFormInputGroup\" placeholder='$placeholder' type=\"text\" value=\"\">
            </div>
        ";
        echo $ele;
    }


    function buttonElement($name, $attr, $styleclass, $id, $text){
        $btn ="
            <button name='$name''$attr class='$styleclass' id='$id' value=\"submit\">$text</button>
            ";
        echo $btn;
    }

    function errorses(){
        $elemented = "<h6 class=$class>Nothing to inserted</h6>";
        echo $elemented;
    }
