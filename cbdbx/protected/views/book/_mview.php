<?php 
            echo '<a href="/cbdbx/index.php/book/' . $data->id . '">';
            echo "<h1>" . CHtml::encode($data->title);
            if(!is_null($data->issue_number)) {
                echo ' Issue ' . CHtml::encode($data->issue_number);
            }
            echo "</h1>"; 
            echo "<p>" . CHtml::encode($data->notes) . "</p>"; 
?>
