<?php

namespace Learning\Coupon\Controller\Adminhtml\Index;

use Magento\Framework\App\Action\HttpPostActionInterface as HttpPostActionInterface;
use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;


class Save extends \Magento\Backend\App\Action implements HttpPostActionInterface
{
    public $coupon;

    protected $resultPageFactory = false;

    public function __construct(\Learning\Coupon\Model\Coupon\CouponFactory $coupon,
                                Action\Context $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->coupon = $coupon;
        $this->resultPageFactory = $resultPageFactory;
    }


    public function execute()
    {
        $data = $this->getRequest();
        $model = $this->coupon->create();
        $model->setName($data->getPost('contact')['name']);
        $model->setLifetime($data->getPost('contact')['lifetime']);
        $model->setCouponCode($data->getPost('contact')['name']);
        $model->setName($data->getPost('contact')['name']);
        var_dump($data->getPost('contact'));

        /*$resultPage = $this->resultPageFactory->create();
        return $resultPage*/;
        // TODO: Implement execute() method.
    }

}
