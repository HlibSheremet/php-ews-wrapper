<?php
/**
 * Definition of the CreateAttachmentType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CreateAttachmentType type
 */
class CreateAttachmentType extends EWSType
{
    /**
     * ParentItemId property
     *
     * ItemIdType
     */
    public $ParentItemId;

    /**
     * Attachments property
     *
     * NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
}
