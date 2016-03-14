<?php
$title="Transaction Records";
include("templates/header.php");

function cur_to_int($input)
{
	if ($input[0] == '$')
	{
		$output = '';
		$count = strlen($input);
		$is_error = false;
		for ($counter = 1; $counter < $count; $counter++)
		{
			if (is_numeric($input[$counter]) || $input[$counter] == '.')
				$output .= $input[$counter];
			else if (!$input[$counter] == ',')
				$is_error = true;
		}
		if ($is_error)
			$output = false;
	}
	else
		$output = false;
	return (int)$output;
}


$transactions = pg_execute($connection, "get_all_transactions", Array());
echo '<table id="transactions"><tr><th>ID</th><th>Date</th><th>Description</th><th>Earnings</th><th>Expences</th></tr>';
$count = pg_num_rows($transactions);
$i = 0;
while($i < $count)
{
	$row = pg_fetch_assoc($transactions);
	echo '<tr><td>'.$row['transactionid'].'</td><td>'.$row['transactiondate'].'</td><td>'.$row['description'].'</td><td>';
	if (0 < cur_to_int($row['cost']))
		echo $row['cost'].'</td><td>';
	else
		echo '</td><td>'.$row['cost'];
	echo '</td></tr>';
	$i++;
}
echo '</table>';

include("templates/footer.php"); ?>
