<?php
namespace frontend\controllers;

use backend\models\Books;
use backend\models\Bulim;
use backend\models\Foto;
use backend\models\Hodim;
use backend\models\News;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = News::find()->orderBy(['id'=>SORT_DESC])->limit(6)->all();

        $title="title_".Yii::$app->language;
        $text="text_".Yii::$app->language;
        return $this->render('index',[

            'model'=>$model,
            'title'=>$title,
            'text'=>$text,
        ]);
    }
    public function actionNews()
    {
        $model = News::find()->orderBy(['id'=>SORT_DESC])->all();
        $text="text_".Yii::$app->language;
        $title="title_".Yii::$app->language;

        return $this->render('news',[

            'model'=>$model,
            'text'=>$text,
            'title'=>$title,

        ]);
    }
    public function actionIsh($id)
    {
        $model = Hodim::find()->where(['bulim_id'=>$id,'lavozim'=>100])->all();
        $bulim = Bulim::find()->where(['id'=>$id])->one();
        $text="text_".Yii::$app->language;
        $fio="fio_".Yii::$app->language;
        $lavozim="lavozim_".Yii::$app->language;
        $malumoti="malumoti_".Yii::$app->language;

        return $this->render('hodim',[

            'model'=>$model,
            'fio'=>$fio,
            'text'=>$text,
            'bulim'=>$bulim,
            'lavozim'=>$lavozim,
            'malumoti'=>$malumoti,
        ]);
    }
    public function actionDep()
    {
        $model = Hodim::find()->where(['lavozim'=>2])->all();

        return $this->render('department',[
            'model'=>$model,
        ]);
    }

    public function actionDepartment()
    {
        $model = Bulim::find()->all();

        $name="name_".Yii::$app->language;

        return $this->render('department1',[

            'model'=>$model,
            'name'=>$name
        ]);
    }
    public function actionFoto()
    {
        $model = Foto::find()->orderBy(['id'=>SORT_DESC])->all();

        return $this->render('foto',[

            'model'=>$model
        ]);
    }
	   public function actionTelegram()
    {

        return $this->render('telegram');
    }
    public function actionBatafsil($id){

        $model= News::find()->where(['id'=>$id])->one();
        $text="text_".Yii::$app->language;
        $title="title_".Yii::$app->language;
        return $this->render('view',[

            'model'=>$model,
            'text'=>$text,
            'title'=>$title,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionBooks()
    {
        $model = Books::find()->where(['status' => 10])->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('books',[
            'model' => $model,
        ]);
    }
}
