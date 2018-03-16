<?php
/* For licensing terms, see /license.txt */

namespace Chamilo\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CForumForum.
 *
 * @ORM\Table(
 *  name="c_forum_forum",
 *  indexes={
 *      @ORM\Index(name="course", columns={"c_id"})
 *  }
 * )
 * @ORM\Entity
 */
class CForumForum
{
    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="c_id", type="integer")
     */
    private $cId;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_id", type="integer")
     */
    private $forumId;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_title", type="string", length=255, nullable=false)
     */
    private $forumTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_comment", type="text", nullable=true)
     */
    private $forumComment;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_threads", type="integer", nullable=true)
     */
    private $forumThreads;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_posts", type="integer", nullable=true)
     */
    private $forumPosts;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_last_post", type="integer", nullable=true)
     */
    private $forumLastPost;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_category", type="integer", nullable=true)
     */
    private $forumCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_anonymous", type="integer", nullable=true)
     */
    private $allowAnonymous;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_edit", type="integer", nullable=true)
     */
    private $allowEdit;

    /**
     * @var string
     *
     * @ORM\Column(name="approval_direct_post", type="string", length=20, nullable=true)
     */
    private $approvalDirectPost;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_attachments", type="integer", nullable=true)
     */
    private $allowAttachments;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_new_threads", type="integer", nullable=true)
     */
    private $allowNewThreads;

    /**
     * @var string
     *
     * @ORM\Column(name="default_view", type="string", length=20, nullable=true)
     */
    private $defaultView;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_of_group", type="string", length=20, nullable=true)
     */
    private $forumOfGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_group_public_private", type="string", length=20, nullable=true)
     */
    private $forumGroupPublicPrivate;

    /**
     * @var int
     *
     * @ORM\Column(name="forum_order", type="integer", nullable=true)
     */
    private $forumOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="locked", type="integer", nullable=false)
     */
    private $locked;

    /**
     * @var int
     *
     * @ORM\Column(name="session_id", type="integer", nullable=false)
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="forum_image", type="string", length=255, nullable=false)
     */
    private $forumImage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @var int
     *
     * @ORM\Column(name="lp_id", type="integer", options={"unsigned":true})
     */
    private $lpId;

    /**
     * @var bool
     *
     * @ORM\Column(name="moderated", type="boolean", nullable=true)
     */
    private $moderated;

    /**
     * Set forumTitle.
     *
     * @param string $forumTitle
     *
     * @return CForumForum
     */
    public function setForumTitle($forumTitle)
    {
        $this->forumTitle = $forumTitle;

        return $this;
    }

    /**
     * Get forumTitle.
     *
     * @return string
     */
    public function getForumTitle()
    {
        return $this->forumTitle;
    }

    /**
     * Set forumComment.
     *
     * @param string $forumComment
     *
     * @return CForumForum
     */
    public function setForumComment($forumComment)
    {
        $this->forumComment = $forumComment;

        return $this;
    }

    /**
     * Get forumComment.
     *
     * @return string
     */
    public function getForumComment()
    {
        return $this->forumComment;
    }

    /**
     * Set forumThreads.
     *
     * @param int $forumThreads
     *
     * @return CForumForum
     */
    public function setForumThreads($forumThreads)
    {
        $this->forumThreads = $forumThreads;

        return $this;
    }

    /**
     * Get forumThreads.
     *
     * @return int
     */
    public function getForumThreads()
    {
        return $this->forumThreads;
    }

    /**
     * Set forumPosts.
     *
     * @param int $forumPosts
     *
     * @return CForumForum
     */
    public function setForumPosts($forumPosts)
    {
        $this->forumPosts = $forumPosts;

        return $this;
    }

    /**
     * Get forumPosts.
     *
     * @return int
     */
    public function getForumPosts()
    {
        return $this->forumPosts;
    }

    /**
     * Set forumLastPost.
     *
     * @param int $forumLastPost
     *
     * @return CForumForum
     */
    public function setForumLastPost($forumLastPost)
    {
        $this->forumLastPost = $forumLastPost;

        return $this;
    }

    /**
     * Get forumLastPost.
     *
     * @return int
     */
    public function getForumLastPost()
    {
        return $this->forumLastPost;
    }

    /**
     * Set forumCategory.
     *
     * @param int $forumCategory
     *
     * @return CForumForum
     */
    public function setForumCategory($forumCategory)
    {
        $this->forumCategory = $forumCategory;

        return $this;
    }

    /**
     * Get forumCategory.
     *
     * @return int
     */
    public function getForumCategory()
    {
        return $this->forumCategory;
    }

    /**
     * Set allowAnonymous.
     *
     * @param int $allowAnonymous
     *
     * @return CForumForum
     */
    public function setAllowAnonymous($allowAnonymous)
    {
        $this->allowAnonymous = $allowAnonymous;

        return $this;
    }

    /**
     * Get allowAnonymous.
     *
     * @return int
     */
    public function getAllowAnonymous()
    {
        return $this->allowAnonymous;
    }

    /**
     * Set allowEdit.
     *
     * @param int $allowEdit
     *
     * @return CForumForum
     */
    public function setAllowEdit($allowEdit)
    {
        $this->allowEdit = $allowEdit;

        return $this;
    }

    /**
     * Get allowEdit.
     *
     * @return int
     */
    public function getAllowEdit()
    {
        return $this->allowEdit;
    }

    /**
     * Set approvalDirectPost.
     *
     * @param string $approvalDirectPost
     *
     * @return CForumForum
     */
    public function setApprovalDirectPost($approvalDirectPost)
    {
        $this->approvalDirectPost = $approvalDirectPost;

        return $this;
    }

    /**
     * Get approvalDirectPost.
     *
     * @return string
     */
    public function getApprovalDirectPost()
    {
        return $this->approvalDirectPost;
    }

    /**
     * Set allowAttachments.
     *
     * @param int $allowAttachments
     *
     * @return CForumForum
     */
    public function setAllowAttachments($allowAttachments)
    {
        $this->allowAttachments = $allowAttachments;

        return $this;
    }

    /**
     * Get allowAttachments.
     *
     * @return int
     */
    public function getAllowAttachments()
    {
        return $this->allowAttachments;
    }

    /**
     * Set allowNewThreads.
     *
     * @param int $allowNewThreads
     *
     * @return CForumForum
     */
    public function setAllowNewThreads($allowNewThreads)
    {
        $this->allowNewThreads = $allowNewThreads;

        return $this;
    }

    /**
     * Get allowNewThreads.
     *
     * @return int
     */
    public function getAllowNewThreads()
    {
        return $this->allowNewThreads;
    }

    /**
     * Set defaultView.
     *
     * @param string $defaultView
     *
     * @return CForumForum
     */
    public function setDefaultView($defaultView)
    {
        $this->defaultView = $defaultView;

        return $this;
    }

    /**
     * Get defaultView.
     *
     * @return string
     */
    public function getDefaultView()
    {
        return $this->defaultView;
    }

    /**
     * Set forumOfGroup.
     *
     * @param string $forumOfGroup
     *
     * @return CForumForum
     */
    public function setForumOfGroup($forumOfGroup)
    {
        $this->forumOfGroup = $forumOfGroup;

        return $this;
    }

    /**
     * Get forumOfGroup.
     *
     * @return string
     */
    public function getForumOfGroup()
    {
        return $this->forumOfGroup;
    }

    /**
     * Set forumGroupPublicPrivate.
     *
     * @param string $forumGroupPublicPrivate
     *
     * @return CForumForum
     */
    public function setForumGroupPublicPrivate($forumGroupPublicPrivate)
    {
        $this->forumGroupPublicPrivate = $forumGroupPublicPrivate;

        return $this;
    }

    /**
     * Get forumGroupPublicPrivate.
     *
     * @return string
     */
    public function getForumGroupPublicPrivate()
    {
        return $this->forumGroupPublicPrivate;
    }

    /**
     * Set forumOrder.
     *
     * @param int $forumOrder
     *
     * @return CForumForum
     */
    public function setForumOrder($forumOrder)
    {
        $this->forumOrder = $forumOrder;

        return $this;
    }

    /**
     * Get forumOrder.
     *
     * @return int
     */
    public function getForumOrder()
    {
        return $this->forumOrder;
    }

    /**
     * Set locked.
     *
     * @param int $locked
     *
     * @return CForumForum
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked.
     *
     * @return int
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set sessionId.
     *
     * @param int $sessionId
     *
     * @return CForumForum
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId.
     *
     * @return int
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set forumImage.
     *
     * @param string $forumImage
     *
     * @return CForumForum
     */
    public function setForumImage($forumImage)
    {
        $this->forumImage = $forumImage;

        return $this;
    }

    /**
     * Get forumImage.
     *
     * @return string
     */
    public function getForumImage()
    {
        return $this->forumImage;
    }

    /**
     * Set startTime.
     *
     * @param \DateTime $startTime
     *
     * @return CForumForum
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime.
     *
     * @param \DateTime $endTime
     *
     * @return CForumForum
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set forumId.
     *
     * @param int $forumId
     *
     * @return CForumForum
     */
    public function setForumId($forumId)
    {
        $this->forumId = $forumId;

        return $this;
    }

    /**
     * Get forumId.
     *
     * @return int
     */
    public function getForumId()
    {
        return $this->forumId;
    }

    /**
     * Set cId.
     *
     * @param int $cId
     *
     * @return CForumForum
     */
    public function setCId($cId)
    {
        $this->cId = $cId;

        return $this;
    }

    /**
     * Get cId.
     *
     * @return int
     */
    public function getCId()
    {
        return $this->cId;
    }

    /**
     * Set lpId.
     *
     * @param int $lpId
     *
     * @return CForumForum
     */
    public function setLpId($lpId)
    {
        $this->lpId = $lpId;

        return $this;
    }

    /**
     * Get lpId.
     *
     * @return int
     */
    public function getLpId()
    {
        return $this->lpId;
    }

    /**
     * @return bool
     */
    public function isModerated()
    {
        return $this->moderated;
    }

    /**
     * @param $moderated
     *
     * @return $this
     */
    public function setModerated($moderated)
    {
        $this->moderated = $moderated;

        return $this;
    }
}
