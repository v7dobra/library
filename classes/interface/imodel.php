<?php


interface Imodel {
	function Create( $args );

	function Update( $id, $args );

	function Delete( $id );

	function Select();


}