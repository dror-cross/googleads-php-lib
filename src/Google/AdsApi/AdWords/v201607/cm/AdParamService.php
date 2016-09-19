<?php

namespace Google\AdsApi\AdWords\v201607\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdParamService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdParam' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdParam',
      'AdParamError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdParamError',
      'AdParamOperation' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdParamOperation',
      'AdParamPage' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdParamPage',
      'AdParamPolicyError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdParamPolicyError',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdxError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ClientTermsError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DistinctError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\NullError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Paging',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Predicate',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\StringLengthError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DatabaseError',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\PolicyViolationError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Selector',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201607/AdParamService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the ad parameters that match the criteria specified in the
     * selector.
     *
     * @param \Google\AdsApi\AdWords\v201607\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201607\cm\AdParamPage
     * @throws \Google\AdsApi\AdWords\v201607\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201607\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Sets and removes ad parameters.
     * <p class="note"><b>Note:</b> {@code ADD} is not supported. Use {@code SET}
     * for new ad parameters.</p>
     *
     * <ul class="nolist">
     * <li>{@code SET}: Creates or updates an ad parameter, setting the new
     * parameterized value for the given ad group / keyword pair.
     * <li>{@code REMOVE}: Removes an ad parameter. The <code><var>default-value</var>
     * </code> specified in the ad text will be used.</li>
     * </ul>
     *
     * result of applying the operation in the input list with the same index.
     * For a {@code SET} operation, the returned ad parameter will contain the
     * updated values. For a {@code REMOVE} operation, the returned ad parameter
     * will simply be the ad parameter that was removed.
     *
     * @param \Google\AdsApi\AdWords\v201607\cm\AdParamOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201607\cm\AdParam[]
     * @throws \Google\AdsApi\AdWords\v201607\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

}
