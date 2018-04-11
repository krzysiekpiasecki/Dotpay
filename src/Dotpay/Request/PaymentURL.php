<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Request;

/**
 * Represents a target URL when redirecting client to the payment gateway (form).
 */
class PaymentURL
{
    /** @var string Target URL */
    private $url;

    /** @var string SellerID */
    private $sellerID;

    /** @var Payment */
    private $payment;

    /**
     * PaymentUrl constructor.
     *
     * @param string  $url
     * @param string  $sellerID
     * @param Payment $payment
     */
    public function __construct(string $url, string $sellerID, Payment $payment)
    {
        $this->url = $url;
        $this->sellerID = $sellerID;
        $this->payment = $payment;
    }

    /**
     * @return string Returns target URL
     */
    public function __toString()
    {
        return sprintf(
            '%s?%s',
            $this->url(),
            $this->queryString()
        );
    }

    /**
     * @return string
     */
    public function url()
    {
        return sprintf('%s/', rtrim($this->url, '/'));
    }

    /**
     * @return string
     */
    public function queryString()
    {
        $payment = $this->payment;

        $queryParameters = [];
        $queryParameters[] = ('' !== $this->sellerID) ? sprintf('id=%s', rawurlencode($this->sellerID)) : '';
        $queryParameters[] = ('' !== $payment->amount) ? sprintf('amount=%.2f', rawurlencode($payment->amount)) : '';
        $queryParameters[] = ('' !== $payment->currency) ? sprintf('currency=%s', rawurlencode($payment->currency)) : '';
        $queryParameters[] = ('' !== $payment->description) ? sprintf('description=%s', rawurlencode($payment->description)) : '';
        $queryParameters[] = ('' !== $payment->lang) ? sprintf('lang=%s', rawurlencode($payment->lang)) : '';
        $queryParameters[] = ('' !== $payment->channel) ? sprintf('channel=%s', rawurlencode($payment->channel)) : '';
        $queryParameters[] = ('true' === $payment->ch_lock || '1' === $payment->ch_lock) ? 'ch_lock=1' : 'ch_lock=0';
        $queryParameters[] = ('' !== $payment->channel_groups) ? sprintf('channel_groups=%s', rawurlencode($payment->channel_groups)) : '';
        $queryParameters[] = ('' !== $payment->URL) ? sprintf('url=%s', rawurlencode($payment->URL)) : '';
        $queryParameters[] = ('' !== $payment->type) ? sprintf('type=%s', rawurlencode($payment->type)) : '';
        $queryParameters[] = ('' !== $payment->buttontext) ? sprintf('buttontext=%s', rawurlencode($payment->buttontext)) : '';
        $queryParameters[] = ('' !== $payment->URLC) ? sprintf('URLC=%s', rawurlencode($payment->URLC)) : '';
        $queryParameters[] = ('' !== $payment->control) ? sprintf('control=%s', rawurlencode($payment->control)) : '';
        $queryParameters[] = ('' !== $payment->firstname) ? sprintf('firstname=%s', rawurlencode($payment->firstname)) : '';
        $queryParameters[] = ('' !== $payment->lastname) ? sprintf('lastname=%s', rawurlencode($payment->lastname)) : '';
        $queryParameters[] = ('' !== $payment->email) ? sprintf('email=%s', rawurlencode($payment->email)) : '';
        $queryParameters[] = ('' !== $payment->street) ? sprintf('street=%s', rawurlencode($payment->street)) : '';
        $queryParameters[] = ('' !== $payment->street_n1) ? sprintf('street_n1=%s', rawurlencode($payment->street_n1)) : '';
        $queryParameters[] = ('' !== $payment->street_n2) ? sprintf('street_n2=%s', rawurlencode($payment->street_n2)) : '';
        $queryParameters[] = ('' !== $payment->state) ? sprintf('state=%s', rawurlencode($payment->state)) : '';
        $queryParameters[] = ('' !== $payment->addr3) ? sprintf('addr_3=%s', rawurlencode($payment->addr3)) : '';
        $queryParameters[] = ('' !== $payment->city) ? sprintf('city=%s', rawurlencode($payment->city)) : '';
        $queryParameters[] = ('' !== $payment->postcode) ? sprintf('postcode=%s', rawurlencode($payment->postcode)) : '';
        $queryParameters[] = ('' !== $payment->phone) ? sprintf('phone=%s', rawurlencode($payment->phone)) : '';
        $queryParameters[] = ('' !== $payment->country) ? sprintf('country=%s', rawurlencode($payment->country)) : '';
        $queryParameters[] = ('' !== $payment->p_info) ? sprintf('p_info=%s', rawurlencode($payment->p_info)) : '';
        $queryParameters[] = ('' !== $payment->p_email) ? sprintf('p_email=%s', rawurlencode($payment->p_email)) : '';
        $queryParameters[] = ('' !== $payment->blik_code) ? sprintf('blik_code=%s', rawurlencode($payment->blik_code)) : '';

        return
            implode(
                '&',
                array_filter($queryParameters)
            )
        ;
    }
}
