<!DOCTYPE html>
<html>
<head>
	<title>nghich</title>
	<!-- load file .js cua ckeditor vao day -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="col-md-10">
    <textarea name="description"><?php echo isset($record->description)?$record->description:""; ?></textarea>
    <script type="text/javascript">
        CKEDITOR.replace("description");
    </script>
</div>
</body>
</html>