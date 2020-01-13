<h1>Blog</h1


    
<div>
    
    <table class="blog" border="1">
        <tr>
            <td>TEXT</td>
            <td>IMAGE</td>
            <td>COMMENT</td>
            <td>&nbsp;</td>
        </tr>
        <?php
        foreach ($this->blogs as $blog) {
            echo '<tr>';
            echo '<td>' . $blog['text'] . '</td>';
            if (!empty($blog['image'])) {
                echo "<td><img src ='data:images/jpg;base64," . $blog['image'] . "'></td>";
            } else {
                echo '<td>/</td>';
            }
            if (!empty($blog['comment'])) {
                echo '<td>' . $blog['comment'] . '</td>';
            } else {
                echo '<td><textarea rows="4" cols="50" name="commentB">Unesite komentar</textarea </td>';
            }
            echo '</tr>';
        }
        ?>
    </table>


</div>