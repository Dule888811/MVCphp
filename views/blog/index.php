<h1>Blog</h1


    
<div>
<h2><a href="<?php echo URL;?>dog">Index</a></h2>
    <table class="blogTable" border="1">
        <tr>
            <td>TEXT</td>
            <td>IMAGE</td>
            <td>COMMENT</td>
          
        </tr>
        <?php
        foreach ($this->blogs as $blog) {         
            echo '<tr>';
            echo '<td>' . $blog['text'] . '</td>';
            if (!empty($blog['image'])) {
                echo "<td><img width='100%' height='100%' src ='data:images/jpg;base64," . $blog['image'] . "'></td>";
            } else {
                echo '<td>/</td>';
            }
            if (!empty($blog['comment'])) {
                echo '<td>' . $blog['comment'] . '</td>';
            } else if($_SESSION['id'] != $blog['user_id'] && isset($blog['id'])) {
                echo '<td name="commentAdd">'?> <a href="<?php echo URL;?>comment/create?blogId=<?php echo $blog['id'];?>">Unesi komentar</a></td>;
          <?php   }
                echo '</tr>'; 
        }
               
      
        ?>
    </table>
</div>