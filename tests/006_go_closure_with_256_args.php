<?php
use \go\Scheduler;

function subtc($seq){
    echo "SUB-TC: #$seq\n";
}

function many_args(
	$a00,$a10,$a20,$a30,$a40,$a50,$a60,$a70,$a80,$a90,$aa0,$ab0,$ac0,$ad0,$ae0,$af0,
	$a01,$a11,$a21,$a31,$a41,$a51,$a61,$a71,$a81,$a91,$aa1,$ab1,$ac1,$ad1,$ae1,$af1,
	$a02,$a12,$a22,$a32,$a42,$a52,$a62,$a72,$a82,$a92,$aa2,$ab2,$ac2,$ad2,$ae2,$af2,
	$a03,$a13,$a23,$a33,$a43,$a53,$a63,$a73,$a83,$a93,$aa3,$ab3,$ac3,$ad3,$ae3,$af3,
	$a04,$a14,$a24,$a34,$a44,$a54,$a64,$a74,$a84,$a94,$aa4,$ab4,$ac4,$ad4,$ae4,$af4,
	$a05,$a15,$a25,$a35,$a45,$a55,$a65,$a75,$a85,$a95,$aa5,$ab5,$ac5,$ad5,$ae5,$af5,
	$a06,$a16,$a26,$a36,$a46,$a56,$a66,$a76,$a86,$a96,$aa6,$ab6,$ac6,$ad6,$ae6,$af6,
	$a07,$a17,$a27,$a37,$a47,$a57,$a67,$a77,$a87,$a97,$aa7,$ab7,$ac7,$ad7,$ae7,$af7,
	$a08,$a18,$a28,$a38,$a48,$a58,$a68,$a78,$a88,$a98,$aa8,$ab8,$ac8,$ad8,$ae8,$af8,
	$a09,$a19,$a29,$a39,$a49,$a59,$a69,$a79,$a89,$a99,$aa9,$ab9,$ac9,$ad9,$ae9,$af9,
	$a0a,$a1a,$a2a,$a3a,$a4a,$a5a,$a6a,$a7a,$a8a,$a9a,$aaa,$aba,$aca,$ada,$aea,$afa,
	$a0b,$a1b,$a2b,$a3b,$a4b,$a5b,$a6b,$a7b,$a8b,$a9b,$aab,$abb,$acb,$adb,$aeb,$afb,
	$a0c,$a1c,$a2c,$a3c,$a4c,$a5c,$a6c,$a7c,$a8c,$a9c,$aac,$abc,$acc,$adc,$aec,$afc,
	$a0d,$a1d,$a2d,$a3d,$a4d,$a5d,$a6d,$a7d,$a8d,$a9d,$aad,$abd,$acd,$add,$aed,$afd,
	$a0e,$a1e,$a2e,$a3e,$a4e,$a5e,$a6e,$a7e,$a8e,$a9e,$aae,$abe,$ace,$ade,$aee,$afe,
	$a0f,$a1f,$a2f,$a3f,$a4f,$a5f,$a6f,$a7f,$a8f,$a9f,$aaf,$abf,$acf,$adf,$aef,$aff
)
{
	subtc(1);
	var_dump( func_get_args() );
}

many_args(
    1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16
);


go(function(
	$a00,$a10,$a20,$a30,$a40,$a50,$a60,$a70,$a80,$a90,$aa0,$ab0,$ac0,$ad0,$ae0,$af0,
	$a01,$a11,$a21,$a31,$a41,$a51,$a61,$a71,$a81,$a91,$aa1,$ab1,$ac1,$ad1,$ae1,$af1,
	$a02,$a12,$a22,$a32,$a42,$a52,$a62,$a72,$a82,$a92,$aa2,$ab2,$ac2,$ad2,$ae2,$af2,
	$a03,$a13,$a23,$a33,$a43,$a53,$a63,$a73,$a83,$a93,$aa3,$ab3,$ac3,$ad3,$ae3,$af3,
	$a04,$a14,$a24,$a34,$a44,$a54,$a64,$a74,$a84,$a94,$aa4,$ab4,$ac4,$ad4,$ae4,$af4,
	$a05,$a15,$a25,$a35,$a45,$a55,$a65,$a75,$a85,$a95,$aa5,$ab5,$ac5,$ad5,$ae5,$af5,
	$a06,$a16,$a26,$a36,$a46,$a56,$a66,$a76,$a86,$a96,$aa6,$ab6,$ac6,$ad6,$ae6,$af6,
	$a07,$a17,$a27,$a37,$a47,$a57,$a67,$a77,$a87,$a97,$aa7,$ab7,$ac7,$ad7,$ae7,$af7,
	$a08,$a18,$a28,$a38,$a48,$a58,$a68,$a78,$a88,$a98,$aa8,$ab8,$ac8,$ad8,$ae8,$af8,
	$a09,$a19,$a29,$a39,$a49,$a59,$a69,$a79,$a89,$a99,$aa9,$ab9,$ac9,$ad9,$ae9,$af9,
	$a0a,$a1a,$a2a,$a3a,$a4a,$a5a,$a6a,$a7a,$a8a,$a9a,$aaa,$aba,$aca,$ada,$aea,$afa,
	$a0b,$a1b,$a2b,$a3b,$a4b,$a5b,$a6b,$a7b,$a8b,$a9b,$aab,$abb,$acb,$adb,$aeb,$afb,
	$a0c,$a1c,$a2c,$a3c,$a4c,$a5c,$a6c,$a7c,$a8c,$a9c,$aac,$abc,$acc,$adc,$aec,$afc,
	$a0d,$a1d,$a2d,$a3d,$a4d,$a5d,$a6d,$a7d,$a8d,$a9d,$aad,$abd,$acd,$add,$aed,$afd,
	$a0e,$a1e,$a2e,$a3e,$a4e,$a5e,$a6e,$a7e,$a8e,$a9e,$aae,$abe,$ace,$ade,$aee,$afe,
	$a0f,$a1f,$a2f,$a3f,$a4f,$a5f,$a6f,$a7f,$a8f,$a9f,$aaf,$abf,$acf,$adf,$aef,$aff
	){
		
		subtc(2);		
		var_dump( func_get_args() );	
				
	},  
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16
);

Scheduler::RunJoinAll();

?>