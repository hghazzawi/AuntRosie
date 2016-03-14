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
echo '<table id="transactions" style="margin-left: auto; margin-right: auto; margin-top: 1em; width: initial;"><tr><th>ID</th><th>Date</th><th>Description</th><th>Expenses</th><th>Earnings</th></tr>';
$count = pg_num_rows($transactions);
$i = 0;
$total = 0;
while($i < $count)
{
	$row = pg_fetch_assoc($transactions);
	echo '<tr><td>'.$row['transactionid'].'</td><td>'.$row['transactiondate'].'</td><td>'.$row['description'].'</td><td>';
  $value = cur_to_int($row['cost']);
  $total += $value;
	if (0 > $value)
		echo $row['cost'].'</td><td>';
	else
		echo '</td><td>'.$row['cost'];
	echo '</td></tr>';
	$i++;
}
echo '<tr><td colspan="4"></td><td>$'.number_format($total, 2).'</td></tr></table>';

include("templates/footer.php"); ?>
