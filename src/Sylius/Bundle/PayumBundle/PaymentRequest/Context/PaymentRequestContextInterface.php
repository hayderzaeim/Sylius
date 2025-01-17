<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\PayumBundle\PaymentRequest\Context;

use Sylius\Component\Payment\Model\PaymentRequestInterface;

/** @experimental */
interface PaymentRequestContextInterface
{
    public function isEnabled(): bool;

    public function enable(PaymentRequestInterface $paymentRequest): void;

    public function disable(): void;

    public function getPaymentRequest(): PaymentRequestInterface;
}
