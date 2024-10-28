<?php

namespace Drupal\pasarela_de_pago_ws\Plugin\Commerce\PaymentMethodType;

use Drupal\commerce_payment\Plugin\Commerce\PaymentMethodType\CreditCard;
use Drupal\commerce_payment\Entity\PaymentMethodInterface;
use Drupal\commerce_payment\CreditCard as CreditCardHelper;
use Drupal\entity\BundleFieldDefinition;




/**
 * Provides the debit card payment method type.
 *
 * @CommercePaymentMethodType(
 *   id = "debit_card",
 *   label = @Translation("Debit card"),
 * )
 */
class DebitCard extends CreditCard {
	
	public function buildLabel(PaymentMethodInterface $payment_method) {
		 $label = parent::buildLabel($payment_method);	 
		 return $label;
	}

	 public function buildFieldDefinitions() {
	 	$fields = parent::buildFieldDefinitions();

	 	return $fields;
	 }

}