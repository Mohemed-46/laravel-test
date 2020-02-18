<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/form/1" method="post">
     <?php echo csrf_field(); ?>
	     Nom : <input type="text" name="nom" > <br>
         Prenom : <input type="text" name="prenom"> <br>
         Email : <input type="email" name="email"> <br>
         <input type="submit" name="sab">
    </form>
</body>
</html><?php /**PATH C:\laragon\www\laravel-test\web1-app\resources\views/formulair.blade.php ENDPATH**/ ?>