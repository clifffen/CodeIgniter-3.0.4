<!DOCTYPE HTML>

<head>
<style>
table, td, th {
  border:1px solid gray
  width:600px;
  cellpadding:5px;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CI CRUD</title>

</head>

<body>

<h2> Simple CI CRUD Application </h2>

<table >

<tr>

<th scope="col">Id</th>

<th scope="col">User Name</th>

<th scope="col">Email</th>

<th scope="col">Mobile</th>

<th scope="col">Address</th>

</tr>

<?php foreach ($user_list as $u_key){ ?>

<tr>

<td><?php echo $u_key->id; ?></td>

<td><?php echo $u_key->name; ?></td>

<td><?php echo $u_key->email; ?></td>

<td><?php echo $u_key->address; ?></td>

<td><?php echo $u_key->mobile; ?></td>

</tr>

<?php }?>

</table>

</body>

</html>
