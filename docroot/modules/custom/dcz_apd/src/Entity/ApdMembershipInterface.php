<?php

namespace Drupal\dcz_apd\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining APD membership entities.
 *
 * @ingroup dcz_apd
 */
interface ApdMembershipInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the APD membership profile.
   *
   * @return string
   *   ID of the APD membership profile.
   */
  public function getProfileId();

  /**
   * Sets the APD membership profile ID.
   *
   * @param int $pid
   *   The APD membership profile ID.
   *
   * @return \Drupal\dcz_apd\Entity\ApdMembershipInterface
   *   The called APD membership entity.
   */
  public function setProfileId($pid);

  /**
   * Gets the APD membership creation timestamp.
   *
   * @return int
   *   Creation timestamp of the APD membership.
   */
  public function getCreatedTime();

  /**
   * Sets the APD membership creation timestamp.
   *
   * @param int $timestamp
   *   The APD membership creation timestamp.
   *
   * @return \Drupal\dcz_apd\Entity\ApdMembershipInterface
   *   The called APD membership entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the APD membership valid status indicator.
   *
   * Invalidated APD membership are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the APD membership is valid.
   */
  public function isValid();

  /**
   * Sets the published status of a APD membership.
   *
   * @param bool $status
   *   TRUE to set this APD membership to valid, FALSE to set it to invalid.
   *
   * @return \Drupal\dcz_apd\Entity\ApdMembershipInterface
   *   The called APD membership entity.
   */
  public function setValid($status);

  /**
   * Gets the APD membership revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the APD membership revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\dcz_apd\Entity\ApdMembershipInterface
   *   The called APD membership entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the APD membership revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the APD membership revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\dcz_apd\Entity\ApdMembershipInterface
   *   The called APD membership entity.
   */
  public function setRevisionUserId($uid);

}
