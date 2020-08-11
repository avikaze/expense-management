<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily expense tracker</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
</head>
<body>
    <div class="parent"><a data-toggle="collapse" href="#expense-menu">
        <em class="fa fa-navicon">&nbsp;</em>Expenses<span data-toggle="collapse" href="#expense-menu" class="icon pull-right"><em class="fa fa-plus"></em></span>
        <div class="expensemenu" id="expense-menu">
            <li><a class="" href="add-expense.php">
                <span class="fa fa-arrow-right"> &nbsp;</span>Add Expenses
            </a></li>
            <li><a class="" href="manage-expense.php">
                <span class="fa fa-arrow-right"> &nbsp;</span>Manage Expenses
            </a></li>
            <li><a class="" href="add-category.php">
                <span class="fa fa-arrow-right"> &nbsp;</span>Add Expenses Category
            </a></li>
        </div>
    </div>
    
</body>
</html>