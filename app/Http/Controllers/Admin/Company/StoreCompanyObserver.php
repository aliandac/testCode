<?php


namespace App\Http\Controllers\Admin\Company;

use SplObserver;
use SplSubject;

class StoreCompanyObserver implements SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {

    }

    /**
     * @param StoreCompany $storeCompany
     *
     */
    function saved(StoreCompany $storeCompany)
    {

    }
}
