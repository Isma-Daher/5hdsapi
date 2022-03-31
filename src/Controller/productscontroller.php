<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\produits;

if ((isset($_POST['produits']))) 
	{
		$name = htmlspecialchars($_POST['nom']);
		$ref = htmlspecialchars($_POST['description']);
		$price_ttc = htmlspecialchars($_POST['token']);
		$price_ht = htmlspecialchars($_POST['prix']);
		$amount = htmlspecialchars($_POST['stock']);
		$notes = htmlspecialchars($_POST['reference']);
		$amount = htmlspecialchars($_POST['created_at']);
		$notes = htmlspecialchars($_POST['update_at']);

		if (empty($_POST['name']))
		{
			$error_messages['name'] = 'Champ vide';
		}	

		if (empty($_POST['description']))
		{
			$error_messages['description'] = 'Champ vide';
		}	

		if (empty($_POST['token']))
		{
			$error_messages['token'] = 'Champ vide';
		}	

		if (empty($_POST['prix']))
		{
			$error_messages['prix'] = 'Champ vide';
		}	

		if (empty($_POST['stock']))
		{
			$error_messages['stock'] = 'Champ vide';
		}
		
		if (empty($_POST['reference']))
		{
			$error_messages['reference'] = 'Champ vide';
		}	

		if (empty($_POST['created_at']))
		{
			$error_messages['created_at'] = 'Champ vide';
		}	

		if (empty($_POST['update_at']))
		{
			$error_messages['update_at'] = 'Champ vide';
		}