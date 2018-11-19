<?php

declare(strict_types=1);

namespace Dotpay\Request;

/**
 * Represents a target URL when redirecting client to the payment gateway
 */
final class PaymentURL
{
    /** @var string Target URL */
    private $url;

    /** @var Payment */
    private $payment;

    /**
     * PaymentUrl constructor.
     *
     * @param string  $url
     * @param Payment $payment
     */
    public function __construct(string $url, Payment $payment)
    {
        $this->url = $url;
        $this->payment = $payment;
    }

    public function getURL(): string {
        return sprintf(
            '%s?%s',
            sprintf('%s/', rtrim($this->url, '/')),
            $this->createQueryString()
        );
    }

    /**
     * @return string Returns target URL
     */
    public function __toString()
    {
        return $this->getURL();
    }

    /**
     * @return string
     */
    private function createQueryString()
    {
        $p = $this->payment;
        $queryParameters = [];
        $queryParameters[] = $p->id ? sprintf('id=%s', rawurlencode($p->id)) : '';
        $queryParameters[] = $p->amount ? sprintf('amount=%.2f', rawurlencode($p->amount)) : '';
        $queryParameters[] = $p->currency ? sprintf('currency=%s', rawurlencode($p->currency)) : '';
        $queryParameters[] = $p->description ? sprintf('description=%s', rawurlencode($p->description)) : '';
        $queryParameters[] = $p->lang ? sprintf('lang=%s', rawurlencode($p->lang)) : '';
        $queryParameters[] = $p->channel ? sprintf('channel=%s', rawurlencode($p->channel)) : '';
        $queryParameters[] = ('true' == $p->ch_lock || '1' === $p->ch_lock) ? 'ch_lock=1' : 'ch_lock=0';
        $queryParameters[] = $p->channel_groups ? sprintf('channel_groups=%s', rawurlencode($p->channel_groups)) : '';
        $queryParameters[] = $p->URL ? sprintf('url=%s', rawurlencode($p->URL)) : '';
        $queryParameters[] = $p->type ? sprintf('type=%s', rawurlencode($p->type)) : '';
        $queryParameters[] = $p->buttontext ? sprintf('buttontext=%s', rawurlencode($p->buttontext)) : '';
        $queryParameters[] = $p->URLC ? sprintf('URLC=%s', rawurlencode($p->URLC)) : '';
        $queryParameters[] = $p->control ? sprintf('control=%s', rawurlencode($p->control)) : '';
        $queryParameters[] = $p->firstname ? sprintf('firstname=%s', rawurlencode($p->firstname)) : '';
        $queryParameters[] = $p->lastname ? sprintf('lastname=%s', rawurlencode($p->lastname)) : '';
        $queryParameters[] = $p->email ? sprintf('email=%s', rawurlencode($p->email)) : '';
        $queryParameters[] = $p->street ? sprintf('street=%s', rawurlencode($p->street)) : '';
        $queryParameters[] = $p->street_n1 ? sprintf('street_n1=%s', rawurlencode($p->street_n1)) : '';
        $queryParameters[] = $p->street_n2 ? sprintf('street_n2=%s', rawurlencode($p->street_n2)) : '';
        $queryParameters[] = $p->state ? sprintf('state=%s', rawurlencode($p->state)) : '';
        $queryParameters[] = $p->addr3 ? sprintf('addr_3=%s', rawurlencode($p->addr3)) : '';
        $queryParameters[] = $p->city ? sprintf('city=%s', rawurlencode($p->city)) : '';
        $queryParameters[] = $p->postcode ? sprintf('postcode=%s', rawurlencode($p->postcode)) : '';
        $queryParameters[] = $p->phone ? sprintf('phone=%s', rawurlencode($p->phone)) : '';
        $queryParameters[] = $p->country ? sprintf('country=%s', rawurlencode($p->country)) : '';
        $queryParameters[] = $p->p_info ? sprintf('p_info=%s', rawurlencode($p->p_info)) : '';
        $queryParameters[] = $p->p_email ? sprintf('p_email=%s', rawurlencode($p->p_email)) : '';
        $queryParameters[] = $p->blik_code ? sprintf('blik_code=%s', rawurlencode($p->blik_code)) : '';
        $queryParameters[] = $p->chk ? sprintf('chck=%s', rawurlencode($p->chk)) : '';

        return
            implode(
                '&',
                array_filter($queryParameters)
            )
        ;
    }
}
