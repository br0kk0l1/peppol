<?php

namespace PonderSource\Peppol\Currency;

class Currency {
    private string $amount;
    private ISO4217 $currencyCode;
    public function __construct(string $amount, ISO4217 $currency){
        $this->amount = $amount;
        $this->currencyCode = $currencyCode;
    }
    public function plus(Currency $c, ?string $exchangeRate) {
        if ($c->getCurrencyCode == $this->currencyCode) {
            return new Currency(bcadd($c->getAmount(),$this->amount, 2), $this->currencyCode);
        } else if (isset($exchangeRate)) {
            return new Currency(bcadd(bcmul($exchangeRate, $c->getAmount()),$this->amount, 2), $this->currencyCode);
        } else {
            throw new ExchangeRateException('To add two different currencies, supply an exchange rate');
        }
    }
    public function minus(Currency $c, ?string $exchangeRate) {
        return $this->plus(new Currency(0-$c->getAmount(), $exchangeRate));
    }
    public function convert(ISO4217 $currencyCode, string $exchangeRate) {
        return new Currency(bcmul($exchangeRate, $this->amount), $currencyCode);
    }
    public function getAmount(): string{
        return bcadd('0.00', $this->amount, 2);
    }
    public function setAmount(float $amount) {
        $this->amount = bcadd('0.00', $amount, 2);
        return $this;
    }
    public function getCurrencyCode(): ISO4217 {
        return $this->currencyCode;
    }
    public function setCurrencyCode(ISO4217 $currencyCode) {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}