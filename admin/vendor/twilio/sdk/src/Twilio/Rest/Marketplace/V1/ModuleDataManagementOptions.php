<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Marketplace
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Marketplace\V1;

use Twilio\Options;
use Twilio\Values;

abstract class ModuleDataManagementOptions
{

    /**
     * @param string $moduleInfo A JSON object containing essential attributes that define a Listing.
     * @param string $description A JSON object describing the Listing. You can define the main body of the description, highlight key features or aspects of the Listing, and provide code samples for developers if applicable.
     * @param string $documentation A JSON object for providing comprehensive information, instructions, and resources related to the Listing.
     * @param string $policies A JSON object describing the Listing's privacy and legal policies. The maximum file size for Policies is 5MB.
     * @param string $support A JSON object containing information on how Marketplace users can obtain support for the Listing. Use this parameter to provide details such as contact information and support description.
     * @param string $configuration A JSON object for providing Listing-specific configuration. Contains button setup, notification URL, and more.
     * @param string $pricing A JSON object for providing Listing's purchase options.
     * @return UpdateModuleDataManagementOptions Options builder
     */
    public static function update(
        
        string $moduleInfo = Values::NONE,
        string $description = Values::NONE,
        string $documentation = Values::NONE,
        string $policies = Values::NONE,
        string $support = Values::NONE,
        string $configuration = Values::NONE,
        string $pricing = Values::NONE

    ): UpdateModuleDataManagementOptions
    {
        return new UpdateModuleDataManagementOptions(
            $moduleInfo,
            $description,
            $documentation,
            $policies,
            $support,
            $configuration,
            $pricing
        );
    }

}


class UpdateModuleDataManagementOptions extends Options
    {
    /**
     * @param string $moduleInfo A JSON object containing essential attributes that define a Listing.
     * @param string $description A JSON object describing the Listing. You can define the main body of the description, highlight key features or aspects of the Listing, and provide code samples for developers if applicable.
     * @param string $documentation A JSON object for providing comprehensive information, instructions, and resources related to the Listing.
     * @param string $policies A JSON object describing the Listing's privacy and legal policies. The maximum file size for Policies is 5MB.
     * @param string $support A JSON object containing information on how Marketplace users can obtain support for the Listing. Use this parameter to provide details such as contact information and support description.
     * @param string $configuration A JSON object for providing Listing-specific configuration. Contains button setup, notification URL, and more.
     * @param string $pricing A JSON object for providing Listing's purchase options.
     */
    public function __construct(
        
        string $moduleInfo = Values::NONE,
        string $description = Values::NONE,
        string $documentation = Values::NONE,
        string $policies = Values::NONE,
        string $support = Values::NONE,
        string $configuration = Values::NONE,
        string $pricing = Values::NONE

    ) {
        $this->options['moduleInfo'] = $moduleInfo;
        $this->options['description'] = $description;
        $this->options['documentation'] = $documentation;
        $this->options['policies'] = $policies;
        $this->options['support'] = $support;
        $this->options['configuration'] = $configuration;
        $this->options['pricing'] = $pricing;
    }

    /**
     * A JSON object containing essential attributes that define a Listing.
     *
     * @param string $moduleInfo A JSON object containing essential attributes that define a Listing.
     * @return $this Fluent Builder
     */
    public function setModuleInfo(string $moduleInfo): self
    {
        $this->options['moduleInfo'] = $moduleInfo;
        return $this;
    }

    /**
     * A JSON object describing the Listing. You can define the main body of the description, highlight key features or aspects of the Listing, and provide code samples for developers if applicable.
     *
     * @param string $description A JSON object describing the Listing. You can define the main body of the description, highlight key features or aspects of the Listing, and provide code samples for developers if applicable.
     * @return $this Fluent Builder
     */
    public function setDescription(string $description): self
    {
        $this->options['description'] = $description;
        return $this;
    }

    /**
     * A JSON object for providing comprehensive information, instructions, and resources related to the Listing.
     *
     * @param string $documentation A JSON object for providing comprehensive information, instructions, and resources related to the Listing.
     * @return $this Fluent Builder
     */
    public function setDocumentation(string $documentation): self
    {
        $this->options['documentation'] = $documentation;
        return $this;
    }

    /**
     * A JSON object describing the Listing's privacy and legal policies. The maximum file size for Policies is 5MB.
     *
     * @param string $policies A JSON object describing the Listing's privacy and legal policies. The maximum file size for Policies is 5MB.
     * @return $this Fluent Builder
     */
    public function setPolicies(string $policies): self
    {
        $this->options['policies'] = $policies;
        return $this;
    }

    /**
     * A JSON object containing information on how Marketplace users can obtain support for the Listing. Use this parameter to provide details such as contact information and support description.
     *
     * @param string $support A JSON object containing information on how Marketplace users can obtain support for the Listing. Use this parameter to provide details such as contact information and support description.
     * @return $this Fluent Builder
     */
    public function setSupport(string $support): self
    {
        $this->options['support'] = $support;
        return $this;
    }

    /**
     * A JSON object for providing Listing-specific configuration. Contains button setup, notification URL, and more.
     *
     * @param string $configuration A JSON object for providing Listing-specific configuration. Contains button setup, notification URL, and more.
     * @return $this Fluent Builder
     */
    public function setConfiguration(string $configuration): self
    {
        $this->options['configuration'] = $configuration;
        return $this;
    }

    /**
     * A JSON object for providing Listing's purchase options.
     *
     * @param string $pricing A JSON object for providing Listing's purchase options.
     * @return $this Fluent Builder
     */
    public function setPricing(string $pricing): self
    {
        $this->options['pricing'] = $pricing;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Marketplace.V1.UpdateModuleDataManagementOptions ' . $options . ']';
    }
}

