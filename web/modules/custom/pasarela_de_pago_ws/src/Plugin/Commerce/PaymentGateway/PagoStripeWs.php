<?php

namespace Drupal\pasarela_de_pago_ws\Plugin\Commerce\PaymentGateway;

use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\OnsitePaymentGatewayBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\commerce_payment\Entity\PaymentInterface;
use Drupal\commerce_payment\Entity\PaymentMethodInterface;



/**
 * Provides the Ws onsite Checkout payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "pago_stripe_ws",
 *   label = @Translation("Payment Stripe WS"),
 *   display_label = @Translation("Pago con ws"),
 *    forms = {
 *     "add-payment-method" = "Drupal\pasarela_de_pago_ws\PluginForm\StripeForm",
 *   },
 *   payment_method_types = {"credit_card"},
 *   credit_card_types = {
 *     "mastercard", "visa",
 *   },
 *   requires_billing_information = FALSE,
 * )
 */
class PagoStripeWs extends OnsitePaymentGatewayBase {


    public function defaultConfiguration() {
        return [
            'private_key' => '',
            'api_key' => '',
          ] + parent::defaultConfiguration();
      }

    public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
        $form = parent::buildConfigurationForm($form, $form_state);

        $form['private_key'] = [
          '#type' => 'textfield',
          '#title' => $this->t('Private key'),
          '#description' => $this->t('This is the private key from the Quickpay manager.'),
          '#default_value' => $this->configuration['private_key'],
          '#required' => TRUE,
        ];

        $form['api_key'] = [
          '#type' => 'textfield',
          '#title' => $this->t('API key'),
          '#description' => $this->t('The API key for the same user as used in Agreement ID.'),
          '#default_value' => $this->configuration['api_key'],
          '#required' => TRUE,
        ];

        return $form;
    }

    public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
        parent::submitConfigurationForm($form, $form_state);
        $values = $form_state->getValue($form['#parents']);
        $this->configuration['private_key'] = $values['private_key'];
        $this->configuration['api_key'] = $values['api_key'];
    }

    public function createPayment(PaymentInterface $payment, $capture = TRUE){
      $this->assertPaymentState($payment, ['new']);

      $payment_method = $payment->getPaymentMethod();
      $amount = $payment->getAmount()->getNumber();
      $currency_code = $payment->getAmount()->getCurrencyCode();
      $order = $payment->getOrder();
      $order_id = $payment->getOrderId();

      $remote_id = $payment_method->getRemoteId();
      $is_reusable = $payment_method->isReusable();
      $owner = $payment_method->getOwner();
      $billing_address = $payment_method->getBillingProfile()->address->first();

      $stripe = new \Stripe\StripeClient('sk_test_51JfENbLqOkP3SGVAApLmsGvGV5Ko3FfeFPQxKtZCno9aT7ePguYAs4wdbDsDVcw6fpWJwo83ComXAgtfBGC24C6800zgAt2Nz3');

        // Create a PaymentIntent with amount and currency
      $paymentIntent = $stripe->paymentIntents->create([
          'amount' => intval($amount) * 100,
          'currency' => $currency_code,
          // In the latest version of the API, specifying the `automatic_payment_methods` parameter is optional because Stripe enables its functionality by default.
          'automatic_payment_methods' => [
              'enabled' => true,
          ],
      ]);

      $output = [
          'clientSecret' => $paymentIntent->client_secret,
      ];

      kint($output);
      kint($paymentIntent);
      exit;
        // //Aqui se hace la transaccion con el proveedor
        // try {
        //   $response = $this->api->transaction()->sale($transaction_data);
        // }
        // catch (\PaymentGatewayAPI\Exception $e) {
        //   throw new PaymentGatewayException('Payment gateway error');
        // }

     }

     public function deletePaymentMethod(PaymentMethodInterface $payment_method){

     }

     public function createPaymentMethod(PaymentMethodInterface $payment_method, array $payment_details){
       

     }

    public function getPublishableKey() {
        return $this->configuration['api_key'];
    }

}