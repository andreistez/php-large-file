<?php

/*$f = fopen( 'db.txt', 'w' );

for( $i = 0; $i < 3_000_000; $i++ ) fwrite( $f, mt_rand( 1_000_000, 10_000_000 ) . "\n" );

fclose( $f );*/

//$a = file( 'db.txt' );
//echo memory_get_usage();

$d = fopen( 'db.txt', 'r' );
$total = $count = 0;

while( ! feof( $d ) ){
	$line = rtrim( fgets( $d ) );

	if( ! $line ) continue;

	$total += ( float ) $line;
	$count++;
}

fclose( $d );

echo number_format( $total / $count );

