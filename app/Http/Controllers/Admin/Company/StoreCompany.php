<?php


namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Admin\Company\User as UserAlias;
use App\Http\Requests\CreateCompanyAdminByAdminRequest;
use App\Models\Company\Company as CompanyModel;
use App\Services\Image;
use App\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use SplObjectStorage;
use SplObserver;
use Illuminate\Support\Str;
use SplSubject;


/**
 * Class StoreCompany
 * @package App\Http\Controllers\Admin\Company
 */
class StoreCompany implements SplSubject
{

    /**
     * @var array
     */
    private $classes = [];

    /**
     * @var SplObjectStorage
     */
    private $observers;

    /**
     * @var $user
     */
    private $user;


    /**
     * @var $company
     */
    private $company;

    /**
     * @var bool $newUser
     */
    private $newUser;


    /**
     * StoreCompany constructor.
     */
    public function __construct()
    {
        $this->classes = [StoreCompanyObserver::class];
        $this->observers = new SplObjectStorage();
    }

    /**
     *
     * @param CreateCompanyAdminByAdminRequest $request
     * @return RedirectResponse
     * @throws Exception
     *
     */
    function byAdmin(CreateCompanyAdminByAdminRequest $request)
    {
        if ($request->post('user') == "0")
        {
            $user = $this->createUser($request->post('name'), $request->post('email'), $request->post('first_phone'));
            $this->setNewUser(true);
        }
        else
        {
            $user = User::where('id', '=', $request->post('user'))->firstOrFail();
            $this->setNewUser(false);
        }

        $request->merge([
            'image' => Image::upload('file', 'images/companies/', $request),
            'user_id' => $user->id
        ]);

        $company = CompanyModel::create($request->except('_token', 'file', 'user'));
        $this->setUser($user);
        $this->setCompany($company);

        return redirect()->back()->with('message', 'Başarılı')->with('type','success');


    }


    /**
     * @param $userName
     * @param $email
     * @param $phone
     * @return User
     */
    private function createUser($userName, $email, $phone)
    {
        return UserAlias::create($userName, $email, $phone);
    }


    /**
     * @return  void
     */
    function notify(): void
    {
        foreach ($this->observers as $class)
            $class->saved($this);

    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user |string
     */
    private function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    private function setCompany($company): void
    {
        $this->company = $company;
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }


    /**
     * @return  void
     */
    function attachAll()
    {
        foreach ($this->classes as $class)
            $this->attach(new $class);
    }


    /**
     * @return bool
     */
    public function isNewUser(): bool
    {
        return $this->newUser;
    }

    /**
     * @param bool $newUser
     */
    private function setNewUser(bool $newUser): void
    {
        $this->newUser = $newUser;
    }

    /**
     *
     */
    public function __destruct()
    {
        $this->attachAll();
        $this->notify();
    }
}


