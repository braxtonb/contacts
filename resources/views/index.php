<!-- /resources/views/index.php -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contacts App</title>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body ng-app="contacts" ng-controller="PeopleCtrl as pc">
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-7">
			<manage-contacts></manage-contacts>
		</div>
		<div class="col-xs-12 col-sm-5">
			<create-contacts></create-contacts>
		</div>
		<my-footer></my-footer>
	</div>
</body>
<script type="text/javascript" src="bower_components/angular/angular.min.js"></script>
<script type="text/javascript" src="bower_components/angular-resource/angular-resource.min.js"></script>
<script type="text/javascript" src="bower_components/angular-bootstrap/ui-bootstrap.min.js"></script>
<script src="bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
<script type="text/javascript" src="javascripts/app.js"></script>
<script type="text/javascript" src="javascripts/controllers/PeopleController.js"></script>
<script type="text/javascript" src="javascripts/services/people.js"></script>
</html>
<script type="text/javascript" src="javascripts/directives/manageContactsDirective.js"></script>
<script type="text/javascript" src="javascripts/directives/createContactsDirective.js"></script>
<script type="text/javascript" src="javascripts/directives/myfooterDirective.js"></script>