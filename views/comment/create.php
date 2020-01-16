<div>
    <form class="form" action="<?php echo URL . 'comment/add/' . $_GET['blogId'] ?>" method="post">
        <label for="commentAdd">Text</label> <input type="text" id="commentAdd" name="commentAdd" /><br/>
      <!--  <select>
            <option name="blogId" id="blogId"  value="<?php echo $_GET['blogId']?>" selected><?php echo $_GET['blogId']?></option>
        </select> -->
        <input class="button" type="submit" value="dodaj" />
    </form>
    
</div>