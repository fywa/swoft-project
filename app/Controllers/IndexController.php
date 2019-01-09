<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  limingxin@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Controllers;

use Swoft\App;
use Swoft\Http\Message\Server\Request;
use Swoft\Http\Message\Server\Response;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;

/**
 * Class IndexController
 * @Controller
 * @package App\Controllers
 */
class IndexController extends BaseController
{
    /**
     * @RequestMapping(route="/", method={RequestMethod::GET, RequestMethod::POST})
     */
    public function index(Request $request): Response
    {
        $data = config('message');

        return $this->response->success($data);
    }
}
