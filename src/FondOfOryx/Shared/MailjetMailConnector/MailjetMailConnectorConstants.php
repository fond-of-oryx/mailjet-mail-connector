<?php

namespace FondOfOryx\Shared\MailjetMailConnector;

interface MailjetMailConnectorConstants
{
    /**
     * @var string
     */
    public const MAILJET_KEY = 'MailjetMailConnector:MAILJET_KEY';

    /**
     * @var string
     */
    public const MAILJET_SECRET = 'MailjetMailConnector:MAILJET_SECRET';

    /**
     * @var string
     */
    public const MAILJET_CONNECTION_TIMEOUT = 'MailjetMailConnector:MAILJET_CONNECTION_TIMEOUT';

    /**
     * @var string
     */
    public const MAILJET_TIMEOUT = 'MailjetMailConnector:MAILJET_TIMEOUT';

    /**
     * @var string
     */
    public const MAILJET_API_CALL_ENABLED = 'MailjetMailConnector:MAILJET_API_CALL_ENABLED';

    /**
     * @var string
     */
    public const MAILJET_FROM_EMAIL = 'MailjetMailConnector:MAILJET_FROM_EMAIL';

    /**
     * @var string
     */
    public const MAILJET_FROM_NAME = 'MailjetMailConnector:MAILJET_FROM_NAME';

    /**
     * @var string
     */
    public const MAILJET_DEFAULT_LOCALE = 'MailjetMailConnector:MAILJET_DEFAULT_LOCALE';

    /**
     * @var string
     */
    public const MAILJET_ORDER_CONFIRMATION_TEMPLATE_ID_BY_LOCALE = 'MailjetMailConnector:MAILJET_ORDER_CONFIRMATION_TEMPLATE_ID_BY_LOCALE';

    /**
     * @var string
     */
    public const MAILJET_VERSION = 'MailjetMailConnector:MAILJET_VERSION';

    /**
     * @var string
     */
    public const MAILJET_URL = 'MailjetMailConnector:MAILJET_URL';

    /**
     * @var string
     */
    public const MAILJET_SECURE = 'MailjetMailConnector:MAILJET_SECURE';

    /**
     * @var string
     */
    public const MAILJET_SANDBOX_MODE = 'MailjetMailConnector:MAILJET_SANDBOX_MODE';

    /**
     * @var string
     */
    public const MAILJET_TEMPLATE_LANGUAGE = 'MailjetMailConnector:MAILJET_TEMPLATE_LANGUAGE';

    /**
     * @var string
     */
    public const MAILJET_WHITELISTED_TLD = 'MailjetMailConnector:MAILJET_WHITELISTED_TLD';

    /**
     * @var string
     */
    public const MAILJET_WHITELISTED_EMAILS = 'MailjetMailConnector:MAILJET_WHITELISTED_EMAILS';

    /**
     * @var string
     */
    public const MAILJET_RETRY_ENABLED = 'MailjetMailConnector:MAILJET_RETRY_ENABLED';

    /**
     * @var string
     */
    public const MAILJET_RETRY_MAX_ATTEMPTS = 'MailjetMailConnector:MAILJET_RETRY_MAX_ATTEMPTS';

    /**
     * @var string
     */
    public const MAILJET_RETRY_ON_STATUS = 'MailjetMailConnector:MAILJET_RETRY_ON_STATUS';

    /**
     * @var string
     */
    public const MAILJET_RETRY_MULTIPLIER = 'MailjetMailConnector:MAILJET_RETRY_MULTIPLIER';

    /**
     * @var string
     */
    public const MAILJET_RETRY_ON_TIMEOUT = 'MailjetMailConnector:MAILJET_RETRY_ON_TIMEOUT';
}
