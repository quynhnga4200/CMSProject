<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/user_list.proto

namespace Google\Ads\GoogleAds\V9\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A user list. This is a list of users a customer may target.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.resources.UserList</code>
 */
class UserList extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the user list.
     * User list resource names have the form:
     * `customers/{customer_id}/userLists/{user_list_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Id of the user list.
     *
     * Generated from protobuf field <code>optional int64 id = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. A flag that indicates if a user may edit a list. Depends on the list
     * ownership and list type. For example, external remarketing user lists are
     * not editable.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional bool read_only = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $read_only = null;
    /**
     * Name of this user list. Depending on its access_reason, the user list name
     * may not be unique (e.g. if access_reason=SHARED)
     *
     * Generated from protobuf field <code>optional string name = 27;</code>
     */
    protected $name = null;
    /**
     * Description of this user list.
     *
     * Generated from protobuf field <code>optional string description = 28;</code>
     */
    protected $description = null;
    /**
     * Membership status of this user list. Indicates whether a user list is open
     * or active. Only open user lists can accumulate more users and can be
     * targeted to.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListMembershipStatusEnum.UserListMembershipStatus membership_status = 6;</code>
     */
    protected $membership_status = 0;
    /**
     * An ID from external system. It is used by user list sellers to correlate
     * IDs on their systems.
     *
     * Generated from protobuf field <code>optional string integration_code = 29;</code>
     */
    protected $integration_code = null;
    /**
     * Number of days a user's cookie stays on your list since its most recent
     * addition to the list. This field must be between 0 and 540 inclusive.
     * However, for CRM based userlists, this field can be set to 10000 which
     * means no expiration.
     * It'll be ignored for logical_user_list.
     *
     * Generated from protobuf field <code>optional int64 membership_life_span = 30;</code>
     */
    protected $membership_life_span = null;
    /**
     * Output only. Estimated number of users in this user list, on the Google Display Network.
     * This value is null if the number of users has not yet been determined.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 size_for_display = 31 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $size_for_display = null;
    /**
     * Output only. Size range in terms of number of users of the UserList, on the Google
     * Display Network.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListSizeRangeEnum.UserListSizeRange size_range_for_display = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $size_range_for_display = 0;
    /**
     * Output only. Estimated number of users in this user list in the google.com domain.
     * These are the users available for targeting in Search campaigns.
     * This value is null if the number of users has not yet been determined.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 size_for_search = 32 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $size_for_search = null;
    /**
     * Output only. Size range in terms of number of users of the UserList, for Search ads.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListSizeRangeEnum.UserListSizeRange size_range_for_search = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $size_range_for_search = 0;
    /**
     * Output only. Type of this list.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListTypeEnum.UserListType type = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    /**
     * Indicating the reason why this user list membership status is closed. It is
     * only populated on lists that were automatically closed due to inactivity,
     * and will be cleared once the list membership status becomes open.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListClosingReasonEnum.UserListClosingReason closing_reason = 14;</code>
     */
    protected $closing_reason = 0;
    /**
     * Output only. Indicates the reason this account has been granted access to the list.
     * The reason can be SHARED, OWNED, LICENSED or SUBSCRIBED.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.AccessReasonEnum.AccessReason access_reason = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $access_reason = 0;
    /**
     * Indicates if this share is still enabled. When a UserList is shared with
     * the user this field is set to ENABLED. Later the userList owner can decide
     * to revoke the share and make it DISABLED.
     * The default value of this field is set to ENABLED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListAccessStatusEnum.UserListAccessStatus account_user_list_status = 16;</code>
     */
    protected $account_user_list_status = 0;
    /**
     * Indicates if this user list is eligible for Google Search Network.
     *
     * Generated from protobuf field <code>optional bool eligible_for_search = 33;</code>
     */
    protected $eligible_for_search = null;
    /**
     * Output only. Indicates this user list is eligible for Google Display Network.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional bool eligible_for_display = 34 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $eligible_for_display = null;
    /**
     * Output only. Indicates match rate for Customer Match lists. The range of this field is
     * [0-100]. This will be null for other list types or when it's not possible
     * to calculate the match rate.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int32 match_rate_percentage = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $match_rate_percentage = null;
    protected $user_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the user list.
     *           User list resource names have the form:
     *           `customers/{customer_id}/userLists/{user_list_id}`
     *     @type int|string $id
     *           Output only. Id of the user list.
     *     @type bool $read_only
     *           Output only. A flag that indicates if a user may edit a list. Depends on the list
     *           ownership and list type. For example, external remarketing user lists are
     *           not editable.
     *           This field is read-only.
     *     @type string $name
     *           Name of this user list. Depending on its access_reason, the user list name
     *           may not be unique (e.g. if access_reason=SHARED)
     *     @type string $description
     *           Description of this user list.
     *     @type int $membership_status
     *           Membership status of this user list. Indicates whether a user list is open
     *           or active. Only open user lists can accumulate more users and can be
     *           targeted to.
     *     @type string $integration_code
     *           An ID from external system. It is used by user list sellers to correlate
     *           IDs on their systems.
     *     @type int|string $membership_life_span
     *           Number of days a user's cookie stays on your list since its most recent
     *           addition to the list. This field must be between 0 and 540 inclusive.
     *           However, for CRM based userlists, this field can be set to 10000 which
     *           means no expiration.
     *           It'll be ignored for logical_user_list.
     *     @type int|string $size_for_display
     *           Output only. Estimated number of users in this user list, on the Google Display Network.
     *           This value is null if the number of users has not yet been determined.
     *           This field is read-only.
     *     @type int $size_range_for_display
     *           Output only. Size range in terms of number of users of the UserList, on the Google
     *           Display Network.
     *           This field is read-only.
     *     @type int|string $size_for_search
     *           Output only. Estimated number of users in this user list in the google.com domain.
     *           These are the users available for targeting in Search campaigns.
     *           This value is null if the number of users has not yet been determined.
     *           This field is read-only.
     *     @type int $size_range_for_search
     *           Output only. Size range in terms of number of users of the UserList, for Search ads.
     *           This field is read-only.
     *     @type int $type
     *           Output only. Type of this list.
     *           This field is read-only.
     *     @type int $closing_reason
     *           Indicating the reason why this user list membership status is closed. It is
     *           only populated on lists that were automatically closed due to inactivity,
     *           and will be cleared once the list membership status becomes open.
     *     @type int $access_reason
     *           Output only. Indicates the reason this account has been granted access to the list.
     *           The reason can be SHARED, OWNED, LICENSED or SUBSCRIBED.
     *           This field is read-only.
     *     @type int $account_user_list_status
     *           Indicates if this share is still enabled. When a UserList is shared with
     *           the user this field is set to ENABLED. Later the userList owner can decide
     *           to revoke the share and make it DISABLED.
     *           The default value of this field is set to ENABLED.
     *     @type bool $eligible_for_search
     *           Indicates if this user list is eligible for Google Search Network.
     *     @type bool $eligible_for_display
     *           Output only. Indicates this user list is eligible for Google Display Network.
     *           This field is read-only.
     *     @type int $match_rate_percentage
     *           Output only. Indicates match rate for Customer Match lists. The range of this field is
     *           [0-100]. This will be null for other list types or when it's not possible
     *           to calculate the match rate.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V9\Common\CrmBasedUserListInfo $crm_based_user_list
     *           User list of CRM users provided by the advertiser.
     *     @type \Google\Ads\GoogleAds\V9\Common\SimilarUserListInfo $similar_user_list
     *           Output only. User list which are similar to users from another UserList.
     *           These lists are readonly and automatically created by google.
     *     @type \Google\Ads\GoogleAds\V9\Common\RuleBasedUserListInfo $rule_based_user_list
     *           User list generated by a rule.
     *     @type \Google\Ads\GoogleAds\V9\Common\LogicalUserListInfo $logical_user_list
     *           User list that is a custom combination of user lists and user interests.
     *     @type \Google\Ads\GoogleAds\V9\Common\BasicUserListInfo $basic_user_list
     *           User list targeting as a collection of conversion or remarketing actions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Resources\UserList::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the user list.
     * User list resource names have the form:
     * `customers/{customer_id}/userLists/{user_list_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the user list.
     * User list resource names have the form:
     * `customers/{customer_id}/userLists/{user_list_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. Id of the user list.
     *
     * Generated from protobuf field <code>optional int64 id = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. Id of the user list.
     *
     * Generated from protobuf field <code>optional int64 id = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. A flag that indicates if a user may edit a list. Depends on the list
     * ownership and list type. For example, external remarketing user lists are
     * not editable.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional bool read_only = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getReadOnly()
    {
        return isset($this->read_only) ? $this->read_only : false;
    }

    public function hasReadOnly()
    {
        return isset($this->read_only);
    }

    public function clearReadOnly()
    {
        unset($this->read_only);
    }

    /**
     * Output only. A flag that indicates if a user may edit a list. Depends on the list
     * ownership and list type. For example, external remarketing user lists are
     * not editable.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional bool read_only = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setReadOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->read_only = $var;

        return $this;
    }

    /**
     * Name of this user list. Depending on its access_reason, the user list name
     * may not be unique (e.g. if access_reason=SHARED)
     *
     * Generated from protobuf field <code>optional string name = 27;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of this user list. Depending on its access_reason, the user list name
     * may not be unique (e.g. if access_reason=SHARED)
     *
     * Generated from protobuf field <code>optional string name = 27;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Description of this user list.
     *
     * Generated from protobuf field <code>optional string description = 28;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Description of this user list.
     *
     * Generated from protobuf field <code>optional string description = 28;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Membership status of this user list. Indicates whether a user list is open
     * or active. Only open user lists can accumulate more users and can be
     * targeted to.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListMembershipStatusEnum.UserListMembershipStatus membership_status = 6;</code>
     * @return int
     */
    public function getMembershipStatus()
    {
        return $this->membership_status;
    }

    /**
     * Membership status of this user list. Indicates whether a user list is open
     * or active. Only open user lists can accumulate more users and can be
     * targeted to.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListMembershipStatusEnum.UserListMembershipStatus membership_status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMembershipStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\UserListMembershipStatusEnum\UserListMembershipStatus::class);
        $this->membership_status = $var;

        return $this;
    }

    /**
     * An ID from external system. It is used by user list sellers to correlate
     * IDs on their systems.
     *
     * Generated from protobuf field <code>optional string integration_code = 29;</code>
     * @return string
     */
    public function getIntegrationCode()
    {
        return isset($this->integration_code) ? $this->integration_code : '';
    }

    public function hasIntegrationCode()
    {
        return isset($this->integration_code);
    }

    public function clearIntegrationCode()
    {
        unset($this->integration_code);
    }

    /**
     * An ID from external system. It is used by user list sellers to correlate
     * IDs on their systems.
     *
     * Generated from protobuf field <code>optional string integration_code = 29;</code>
     * @param string $var
     * @return $this
     */
    public function setIntegrationCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->integration_code = $var;

        return $this;
    }

    /**
     * Number of days a user's cookie stays on your list since its most recent
     * addition to the list. This field must be between 0 and 540 inclusive.
     * However, for CRM based userlists, this field can be set to 10000 which
     * means no expiration.
     * It'll be ignored for logical_user_list.
     *
     * Generated from protobuf field <code>optional int64 membership_life_span = 30;</code>
     * @return int|string
     */
    public function getMembershipLifeSpan()
    {
        return isset($this->membership_life_span) ? $this->membership_life_span : 0;
    }

    public function hasMembershipLifeSpan()
    {
        return isset($this->membership_life_span);
    }

    public function clearMembershipLifeSpan()
    {
        unset($this->membership_life_span);
    }

    /**
     * Number of days a user's cookie stays on your list since its most recent
     * addition to the list. This field must be between 0 and 540 inclusive.
     * However, for CRM based userlists, this field can be set to 10000 which
     * means no expiration.
     * It'll be ignored for logical_user_list.
     *
     * Generated from protobuf field <code>optional int64 membership_life_span = 30;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMembershipLifeSpan($var)
    {
        GPBUtil::checkInt64($var);
        $this->membership_life_span = $var;

        return $this;
    }

    /**
     * Output only. Estimated number of users in this user list, on the Google Display Network.
     * This value is null if the number of users has not yet been determined.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 size_for_display = 31 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSizeForDisplay()
    {
        return isset($this->size_for_display) ? $this->size_for_display : 0;
    }

    public function hasSizeForDisplay()
    {
        return isset($this->size_for_display);
    }

    public function clearSizeForDisplay()
    {
        unset($this->size_for_display);
    }

    /**
     * Output only. Estimated number of users in this user list, on the Google Display Network.
     * This value is null if the number of users has not yet been determined.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 size_for_display = 31 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeForDisplay($var)
    {
        GPBUtil::checkInt64($var);
        $this->size_for_display = $var;

        return $this;
    }

    /**
     * Output only. Size range in terms of number of users of the UserList, on the Google
     * Display Network.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListSizeRangeEnum.UserListSizeRange size_range_for_display = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSizeRangeForDisplay()
    {
        return $this->size_range_for_display;
    }

    /**
     * Output only. Size range in terms of number of users of the UserList, on the Google
     * Display Network.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListSizeRangeEnum.UserListSizeRange size_range_for_display = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSizeRangeForDisplay($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\UserListSizeRangeEnum\UserListSizeRange::class);
        $this->size_range_for_display = $var;

        return $this;
    }

    /**
     * Output only. Estimated number of users in this user list in the google.com domain.
     * These are the users available for targeting in Search campaigns.
     * This value is null if the number of users has not yet been determined.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 size_for_search = 32 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSizeForSearch()
    {
        return isset($this->size_for_search) ? $this->size_for_search : 0;
    }

    public function hasSizeForSearch()
    {
        return isset($this->size_for_search);
    }

    public function clearSizeForSearch()
    {
        unset($this->size_for_search);
    }

    /**
     * Output only. Estimated number of users in this user list in the google.com domain.
     * These are the users available for targeting in Search campaigns.
     * This value is null if the number of users has not yet been determined.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 size_for_search = 32 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeForSearch($var)
    {
        GPBUtil::checkInt64($var);
        $this->size_for_search = $var;

        return $this;
    }

    /**
     * Output only. Size range in terms of number of users of the UserList, for Search ads.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListSizeRangeEnum.UserListSizeRange size_range_for_search = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSizeRangeForSearch()
    {
        return $this->size_range_for_search;
    }

    /**
     * Output only. Size range in terms of number of users of the UserList, for Search ads.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListSizeRangeEnum.UserListSizeRange size_range_for_search = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSizeRangeForSearch($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\UserListSizeRangeEnum\UserListSizeRange::class);
        $this->size_range_for_search = $var;

        return $this;
    }

    /**
     * Output only. Type of this list.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListTypeEnum.UserListType type = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. Type of this list.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListTypeEnum.UserListType type = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\UserListTypeEnum\UserListType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Indicating the reason why this user list membership status is closed. It is
     * only populated on lists that were automatically closed due to inactivity,
     * and will be cleared once the list membership status becomes open.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListClosingReasonEnum.UserListClosingReason closing_reason = 14;</code>
     * @return int
     */
    public function getClosingReason()
    {
        return $this->closing_reason;
    }

    /**
     * Indicating the reason why this user list membership status is closed. It is
     * only populated on lists that were automatically closed due to inactivity,
     * and will be cleared once the list membership status becomes open.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListClosingReasonEnum.UserListClosingReason closing_reason = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setClosingReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\UserListClosingReasonEnum\UserListClosingReason::class);
        $this->closing_reason = $var;

        return $this;
    }

    /**
     * Output only. Indicates the reason this account has been granted access to the list.
     * The reason can be SHARED, OWNED, LICENSED or SUBSCRIBED.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.AccessReasonEnum.AccessReason access_reason = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAccessReason()
    {
        return $this->access_reason;
    }

    /**
     * Output only. Indicates the reason this account has been granted access to the list.
     * The reason can be SHARED, OWNED, LICENSED or SUBSCRIBED.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.AccessReasonEnum.AccessReason access_reason = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAccessReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\AccessReasonEnum\AccessReason::class);
        $this->access_reason = $var;

        return $this;
    }

    /**
     * Indicates if this share is still enabled. When a UserList is shared with
     * the user this field is set to ENABLED. Later the userList owner can decide
     * to revoke the share and make it DISABLED.
     * The default value of this field is set to ENABLED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListAccessStatusEnum.UserListAccessStatus account_user_list_status = 16;</code>
     * @return int
     */
    public function getAccountUserListStatus()
    {
        return $this->account_user_list_status;
    }

    /**
     * Indicates if this share is still enabled. When a UserList is shared with
     * the user this field is set to ENABLED. Later the userList owner can decide
     * to revoke the share and make it DISABLED.
     * The default value of this field is set to ENABLED.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListAccessStatusEnum.UserListAccessStatus account_user_list_status = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setAccountUserListStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\UserListAccessStatusEnum\UserListAccessStatus::class);
        $this->account_user_list_status = $var;

        return $this;
    }

    /**
     * Indicates if this user list is eligible for Google Search Network.
     *
     * Generated from protobuf field <code>optional bool eligible_for_search = 33;</code>
     * @return bool
     */
    public function getEligibleForSearch()
    {
        return isset($this->eligible_for_search) ? $this->eligible_for_search : false;
    }

    public function hasEligibleForSearch()
    {
        return isset($this->eligible_for_search);
    }

    public function clearEligibleForSearch()
    {
        unset($this->eligible_for_search);
    }

    /**
     * Indicates if this user list is eligible for Google Search Network.
     *
     * Generated from protobuf field <code>optional bool eligible_for_search = 33;</code>
     * @param bool $var
     * @return $this
     */
    public function setEligibleForSearch($var)
    {
        GPBUtil::checkBool($var);
        $this->eligible_for_search = $var;

        return $this;
    }

    /**
     * Output only. Indicates this user list is eligible for Google Display Network.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional bool eligible_for_display = 34 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getEligibleForDisplay()
    {
        return isset($this->eligible_for_display) ? $this->eligible_for_display : false;
    }

    public function hasEligibleForDisplay()
    {
        return isset($this->eligible_for_display);
    }

    public function clearEligibleForDisplay()
    {
        unset($this->eligible_for_display);
    }

    /**
     * Output only. Indicates this user list is eligible for Google Display Network.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional bool eligible_for_display = 34 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setEligibleForDisplay($var)
    {
        GPBUtil::checkBool($var);
        $this->eligible_for_display = $var;

        return $this;
    }

    /**
     * Output only. Indicates match rate for Customer Match lists. The range of this field is
     * [0-100]. This will be null for other list types or when it's not possible
     * to calculate the match rate.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int32 match_rate_percentage = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getMatchRatePercentage()
    {
        return isset($this->match_rate_percentage) ? $this->match_rate_percentage : 0;
    }

    public function hasMatchRatePercentage()
    {
        return isset($this->match_rate_percentage);
    }

    public function clearMatchRatePercentage()
    {
        unset($this->match_rate_percentage);
    }

    /**
     * Output only. Indicates match rate for Customer Match lists. The range of this field is
     * [0-100]. This will be null for other list types or when it's not possible
     * to calculate the match rate.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int32 match_rate_percentage = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setMatchRatePercentage($var)
    {
        GPBUtil::checkInt32($var);
        $this->match_rate_percentage = $var;

        return $this;
    }

    /**
     * User list of CRM users provided by the advertiser.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.CrmBasedUserListInfo crm_based_user_list = 19;</code>
     * @return \Google\Ads\GoogleAds\V9\Common\CrmBasedUserListInfo|null
     */
    public function getCrmBasedUserList()
    {
        return $this->readOneof(19);
    }

    public function hasCrmBasedUserList()
    {
        return $this->hasOneof(19);
    }

    /**
     * User list of CRM users provided by the advertiser.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.CrmBasedUserListInfo crm_based_user_list = 19;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\CrmBasedUserListInfo $var
     * @return $this
     */
    public function setCrmBasedUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Common\CrmBasedUserListInfo::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Output only. User list which are similar to users from another UserList.
     * These lists are readonly and automatically created by google.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.SimilarUserListInfo similar_user_list = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V9\Common\SimilarUserListInfo|null
     */
    public function getSimilarUserList()
    {
        return $this->readOneof(20);
    }

    public function hasSimilarUserList()
    {
        return $this->hasOneof(20);
    }

    /**
     * Output only. User list which are similar to users from another UserList.
     * These lists are readonly and automatically created by google.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.SimilarUserListInfo similar_user_list = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V9\Common\SimilarUserListInfo $var
     * @return $this
     */
    public function setSimilarUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Common\SimilarUserListInfo::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * User list generated by a rule.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.RuleBasedUserListInfo rule_based_user_list = 21;</code>
     * @return \Google\Ads\GoogleAds\V9\Common\RuleBasedUserListInfo|null
     */
    public function getRuleBasedUserList()
    {
        return $this->readOneof(21);
    }

    public function hasRuleBasedUserList()
    {
        return $this->hasOneof(21);
    }

    /**
     * User list generated by a rule.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.RuleBasedUserListInfo rule_based_user_list = 21;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\RuleBasedUserListInfo $var
     * @return $this
     */
    public function setRuleBasedUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Common\RuleBasedUserListInfo::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * User list that is a custom combination of user lists and user interests.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.LogicalUserListInfo logical_user_list = 22;</code>
     * @return \Google\Ads\GoogleAds\V9\Common\LogicalUserListInfo|null
     */
    public function getLogicalUserList()
    {
        return $this->readOneof(22);
    }

    public function hasLogicalUserList()
    {
        return $this->hasOneof(22);
    }

    /**
     * User list that is a custom combination of user lists and user interests.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.LogicalUserListInfo logical_user_list = 22;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\LogicalUserListInfo $var
     * @return $this
     */
    public function setLogicalUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Common\LogicalUserListInfo::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * User list targeting as a collection of conversion or remarketing actions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.BasicUserListInfo basic_user_list = 23;</code>
     * @return \Google\Ads\GoogleAds\V9\Common\BasicUserListInfo|null
     */
    public function getBasicUserList()
    {
        return $this->readOneof(23);
    }

    public function hasBasicUserList()
    {
        return $this->hasOneof(23);
    }

    /**
     * User list targeting as a collection of conversion or remarketing actions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.common.BasicUserListInfo basic_user_list = 23;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\BasicUserListInfo $var
     * @return $this
     */
    public function setBasicUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V9\Common\BasicUserListInfo::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getUserList()
    {
        return $this->whichOneof("user_list");
    }

}

