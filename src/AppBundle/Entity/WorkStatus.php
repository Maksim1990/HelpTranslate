<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkStatus
 *
 * @ORM\Table(name="work_status")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WorkStatusRepository")
 */
class WorkStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="work_id", type="integer")
     */
    private $workId;

    /**
     * @var string
     *
     * @ORM\Column(name="work_type", type="string", length=255)
     */
    private $workType;

    /**
     * @var string
     *
     * @ORM\Column(name="work_status", type="string", length=255)
     */
    private $workStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="user_reviewer_id", type="integer")
     */
    private $userReviewerId;

    /**
     * @var string
     *
     * @ORM\Column(name="teacher_description", type="string", length=255, nullable=true)
     */
    private $teacherDescription;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set workId
     *
     * @param integer $workId
     *
     * @return WorkStatus
     */
    public function setWorkId($workId)
    {
        $this->workId = $workId;

        return $this;
    }

    /**
     * Get workId
     *
     * @return int
     */
    public function getWorkId()
    {
        return $this->workId;
    }

    /**
     * Set workType
     *
     * @param string $workType
     *
     * @return WorkStatus
     */
    public function setWorkType($workType)
    {
        $this->workType = $workType;

        return $this;
    }

    /**
     * Get workType
     *
     * @return string
     */
    public function getWorkType()
    {
        return $this->workType;
    }

    /**
     * Set workStatus
     *
     * @param string $workStatus
     *
     * @return WorkStatus
     */
    public function setWorkStatus($workStatus)
    {
        $this->workStatus = $workStatus;

        return $this;
    }

    /**
     * Get workStatus
     *
     * @return string
     */
    public function getWorkStatus()
    {
        return $this->workStatus;
    }

    /**
     * Set userReviewerId
     *
     * @param integer $userReviewerId
     *
     * @return WorkStatus
     */
    public function setUserReviewerId($userReviewerId)
    {
        $this->userReviewerId = $userReviewerId;

        return $this;
    }

    /**
     * Get userReviewerId
     *
     * @return int
     */
    public function getUserReviewerId()
    {
        return $this->userReviewerId;
    }


    /**
     * Set teacherDescription
     *
     * @param string $teacherDescription
     *
     * @return WorkStatus
     */
    public function setTeacherDescription($teacherDescription)
    {
        $this->teacherDescription = $teacherDescription;

        return $this;
    }

    /**
     * Get teacherDescription
     *
     * @return string
     */
    public function getTeacherDescription()
    {
        return $this->teacherDescription;
    }






    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Message
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Message
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
