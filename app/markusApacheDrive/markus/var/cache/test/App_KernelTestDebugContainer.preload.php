<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelTestDebugContainer.php')->set(\ContainerJI5IZcL\App_KernelTestDebugContainer::class, null);
require __DIR__.'/ContainerJI5IZcL/EntityManager_9a5be93.php';
require __DIR__.'/ContainerJI5IZcL/getWebProfiler_Csp_HandlerService.php';
require __DIR__.'/ContainerJI5IZcL/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerJI5IZcL/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerJI5IZcL/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerJI5IZcL/getUriSignerService.php';
require __DIR__.'/ContainerJI5IZcL/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerJI5IZcL/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerJI5IZcL/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerJI5IZcL/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerJI5IZcL/getTwig_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerJI5IZcL/getTest_ServiceContainerService.php';
require __DIR__.'/ContainerJI5IZcL/getTest_PrivateServicesLocatorService.php';
require __DIR__.'/ContainerJI5IZcL/getTest_Client_HistoryService.php';
require __DIR__.'/ContainerJI5IZcL/getTest_Client_CookiejarService.php';
require __DIR__.'/ContainerJI5IZcL/getTest_ClientService.php';
require __DIR__.'/ContainerJI5IZcL/getSluggerService.php';
require __DIR__.'/ContainerJI5IZcL/getSession_Storage_Factory_MockFileService.php';
require __DIR__.'/ContainerJI5IZcL/getSession_FactoryService.php';
require __DIR__.'/ContainerJI5IZcL/getServicesResetterService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_UserCheckerService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_LogoutListener_MainService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Logout_Listener_Session_MainService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Firewall_Map_Config_MainService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Firewall_Map_Config_DevService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_ExceptionListener_MainService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Csrf_TokenGeneratorService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Authenticator_Manager_MainService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Authentication_SessionStrategyService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerJI5IZcL/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerJI5IZcL/getSecrets_VaultService.php';
require __DIR__.'/ContainerJI5IZcL/getSecrets_DecryptionKeyService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_ResolverService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_Loader_YmlService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_Loader_XmlService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_Loader_PhpService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_Loader_GlobService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_Loader_DirectoryService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_Loader_ContainerService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_Loader_Annotation_FileService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_Loader_Annotation_DirectoryService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_Loader_AnnotationService.php';
require __DIR__.'/ContainerJI5IZcL/getRouting_LoaderService.php';
require __DIR__.'/ContainerJI5IZcL/getPropertyInfo_ReflectionExtractorService.php';
require __DIR__.'/ContainerJI5IZcL/getPropertyAccessorService.php';
require __DIR__.'/ContainerJI5IZcL/getFragment_UriGeneratorService.php';
require __DIR__.'/ContainerJI5IZcL/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerJI5IZcL/getFragment_HandlerService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_TypeExtension_Submit_ValidatorService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_TypeExtension_Repeated_ValidatorService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_TypeExtension_Form_TransformationFailureHandlingService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_TypeExtension_Form_RequestHandlerService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_TypeExtension_Form_DataCollectorService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_Type_FormService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_Type_EntityService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_Type_ColorService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_ServerParamsService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_ResolvedTypeFactoryService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_RegistryService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_ExtensionService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_ChoiceListFactory_PropertyAccessService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_ChoiceListFactory_DefaultService.php';
require __DIR__.'/ContainerJI5IZcL/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerJI5IZcL/getFileLocatorService.php';
require __DIR__.'/ContainerJI5IZcL/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerJI5IZcL/getErrorControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_QuoteStrategy_DefaultService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_NamingStrategy_UnderscoreNumberAwareService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_DefaultManagerConfiguratorService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_DefaultEntityListenerResolverService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_DefaultConfigurationService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_DefaultAnnotationMetadataDriverService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Orm_ContainerRepositoryFactoryService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Migrations_ContainerAwareMigrationsFactory_InnerService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Migrations_ContainerAwareMigrationsFactoryService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Dbal_DefaultConnection_ConfigurationService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerJI5IZcL/getDoctrine_Dbal_ConnectionFactoryService.php';
require __DIR__.'/ContainerJI5IZcL/getDependencyInjection_Config_ContainerParametersResourceCheckerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_Security_UserValueResolver_InnerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_Security_Firewall_Authenticator_Main_InnerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_Variadic_InnerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_Session_InnerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_Service_InnerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_RequestAttribute_InnerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_Request_InnerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_NotTaggedController_InnerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_Default_InnerService.php';
require __DIR__.'/ContainerJI5IZcL/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerJI5IZcL/getContainer_GetenvService.php';
require __DIR__.'/ContainerJI5IZcL/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerJI5IZcL/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerJI5IZcL/getConfig_Resource_SelfCheckingResourceCheckerService.php';
require __DIR__.'/ContainerJI5IZcL/getCache_SystemClearerService.php';
require __DIR__.'/ContainerJI5IZcL/getCache_PropertyAccessService.php';
require __DIR__.'/ContainerJI5IZcL/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerJI5IZcL/getCache_Doctrine_Orm_Default_MetadataService.php';
require __DIR__.'/ContainerJI5IZcL/getCache_AppClearerService.php';
require __DIR__.'/ContainerJI5IZcL/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerJI5IZcL/getAnnotations_DummyRegistryService.php';
require __DIR__.'/ContainerJI5IZcL/getAnnotations_CachedReaderService.php';
require __DIR__.'/ContainerJI5IZcL/getTemplateControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getRedirectControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getProfilerControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getAuthenticatorService.php';
require __DIR__.'/ContainerJI5IZcL/getUserRepositoryService.php';
require __DIR__.'/ContainerJI5IZcL/getTeacherRepositoryService.php';
require __DIR__.'/ContainerJI5IZcL/getStudentRepositoryService.php';
require __DIR__.'/ContainerJI5IZcL/getSchoolSubjectRepositoryService.php';
require __DIR__.'/ContainerJI5IZcL/getSchoolClassRepositoryService.php';
require __DIR__.'/ContainerJI5IZcL/getMarksRepositoryService.php';
require __DIR__.'/ContainerJI5IZcL/getHoursOfClassesAndBreaksRepositoryService.php';
require __DIR__.'/ContainerJI5IZcL/getAbsenceRepositoryService.php';
require __DIR__.'/ContainerJI5IZcL/getMainSiteControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getMarksPageController3Service.php';
require __DIR__.'/ContainerJI5IZcL/getMainPageController4Service.php';
require __DIR__.'/ContainerJI5IZcL/getAbsencePageController3Service.php';
require __DIR__.'/ContainerJI5IZcL/getTimeTablePageControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getMarksPageController2Service.php';
require __DIR__.'/ContainerJI5IZcL/getMainPageController3Service.php';
require __DIR__.'/ContainerJI5IZcL/getAbsencePageController2Service.php';
require __DIR__.'/ContainerJI5IZcL/getSecurityControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getMainPageController2Service.php';
require __DIR__.'/ContainerJI5IZcL/getTeacherEditPageControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getStudentEditPageControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getMarksPageControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getMainPageControllerService.php';
require __DIR__.'/ContainerJI5IZcL/getAbsencePageControllerService.php';
require __DIR__.'/ContainerJI5IZcL/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerJI5IZcL/get_ServiceLocator_RDrmLqxService.php';
require __DIR__.'/ContainerJI5IZcL/get_ServiceLocator_UDgw6OlService.php';
require __DIR__.'/ContainerJI5IZcL/get_ServiceLocator_T7xmfzkService.php';
require __DIR__.'/ContainerJI5IZcL/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerJI5IZcL/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerJI5IZcL/get_ServiceLocator_KLVvNIqService.php';
require __DIR__.'/ContainerJI5IZcL/get_ServiceLocator_GNc8e5BService.php';
require __DIR__.'/ContainerJI5IZcL/get_ServiceLocator_C3u8e9wService.php';
require __DIR__.'/ContainerJI5IZcL/get_Doctrine_Orm_DefaultMetadataDriverService.php';
require __DIR__.'/ContainerJI5IZcL/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerJI5IZcL/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerJI5IZcL/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerJI5IZcL/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerJI5IZcL/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerJI5IZcL/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\Admin\absencePageController';
$classes[] = 'App\Controller\Admin\mainPageController';
$classes[] = 'App\Controller\Admin\marksPageController';
$classes[] = 'App\Controller\Admin\studentEditPageController';
$classes[] = 'App\Controller\Admin\teacherEditPageController';
$classes[] = 'App\Controller\Parent\mainPageController';
$classes[] = 'App\Controller\SecurityController';
$classes[] = 'App\Controller\Student\absencePageController';
$classes[] = 'App\Controller\Student\mainPageController';
$classes[] = 'App\Controller\Student\marksPageController';
$classes[] = 'App\Controller\Student\timeTablePageController';
$classes[] = 'App\Controller\Teacher\absencePageController';
$classes[] = 'App\Controller\Teacher\mainPageController';
$classes[] = 'App\Controller\Teacher\marksPageController';
$classes[] = 'App\Controller\mainSiteController';
$classes[] = 'App\Repository\AbsenceRepository';
$classes[] = 'App\Repository\HoursOfClassesAndBreaksRepository';
$classes[] = 'App\Repository\MarksRepository';
$classes[] = 'App\Repository\SchoolClassRepository';
$classes[] = 'App\Repository\SchoolSubjectRepository';
$classes[] = 'App\Repository\StudentRepository';
$classes[] = 'App\Repository\TeacherRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Security\Authenticator';
$classes[] = 'App\Twig\CustomFunction';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\Migrations\Configuration\Configuration';
$classes[] = 'Doctrine\Migrations\Configuration\Migration\ExistingConfiguration';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\MigrationsFactory\ContainerAwareMigrationFactory';
$classes[] = 'Doctrine\Migrations\Version\MigrationFactory';
$classes[] = 'Doctrine\Migrations\DependencyFactory';
$classes[] = 'Doctrine\Migrations\Configuration\EntityManager\ManagerRegistryEntityManager';
$classes[] = 'Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Collector\MigrationsCollector';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\Collector\MigrationsFlattener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\KernelBrowser';
$classes[] = 'Symfony\Component\BrowserKit\CookieJar';
$classes[] = 'Symfony\Component\BrowserKit\History';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Test\TestContainer';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';

$preloaded = Preloader::preload($classes);
