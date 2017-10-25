<?php include 'header.php';?>

<div class="container">
	<?php  if( $error = $this->session->flashdata('response')):?>
		<div class="alert alert-success" role="alert">
  <?php  echo "$error"; ?>
</div>
<?php endif ?>
	<div class="row">
		<div class="col-lg-12">
			<?php echo anchor("home/create",'Create', ['class' => 'btn btn-success']); ?>
		</div>
	</div>
<table class="table table-hover">
  <thead>

    <tr>
      <th>Customer Name</th>
      <th>Phone</th>
      <th>Address</th>
			<th>City</th>
			<th>Country</th>
			<th>Action</th>
    </tr>
  </thead>
	<?php if ($records) {
		foreach ($records as $record) {?>
  <tbody>
    <tr>
      <td><?php echo $record->customername; ?></td>
      <td><?php echo $record->phone; ?></td>
			<td><?php echo $record->address; ?></td>
      <td><?php echo $record->city; ?></td>
			<td><?php echo $record->country; ?></td>
<td><?php echo anchor("home/edit/{$record->id}",'Update', ['class' => 'btn btn-primary']); ?>
<?php echo anchor("home/delete/{$record->id}",'Delete', ['class' => 'btn btn-danger']); ?></td>
    </tr>
	<?php  } }else {
echo "No Records found";

	}  ?>
  </tbody>
</table>
</div>

<?php include 'footer.php';?>
</body>
</html>
