<?php
echo <<<_END
   <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
   <input type="file" name="file">
   <input type="submit" name="submit" value="Upload">
</form>
_END;
