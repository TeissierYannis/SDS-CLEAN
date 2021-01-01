<?php

namespace ContainerYbE7TUc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class App_KernelTestDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\UserInterface\\Controller\\Article\\CreateController' => 'getCreateControllerService',
            'App\\UserInterface\\Controller\\Article\\ListingController' => 'getListingControllerService',
            'App\\UserInterface\\Controller\\Article\\RemoveController' => 'getRemoveControllerService',
            'App\\UserInterface\\Controller\\Article\\UpdateController' => 'getUpdateControllerService',
            'App\\UserInterface\\Controller\\Category\\CreateController' => 'getCreateController2Service',
            'App\\UserInterface\\Controller\\Category\\ListingController' => 'getListingController2Service',
            'App\\UserInterface\\Controller\\Category\\RemoveController' => 'getRemoveController2Service',
            'App\\UserInterface\\Controller\\Category\\UpdateController' => 'getUpdateController2Service',
            'App\\UserInterface\\Controller\\LoginController' => 'getLoginControllerService',
            'App\\UserInterface\\Controller\\LogoutController' => 'getLogoutControllerService',
            'App\\UserInterface\\Controller\\RegistrationController' => 'getRegistrationControllerService',
            'App\\UserInterface\\Controller\\Security\\AskPasswordResetController' => 'getAskPasswordResetControllerService',
            'App\\UserInterface\\Controller\\Security\\RecoverPasswordController' => 'getRecoverPasswordControllerService',
            'App\\UserInterface\\Controller\\Security\\Role\\CreateController' => 'getCreateController3Service',
            'App\\UserInterface\\Controller\\Security\\User\\ListingController' => 'getListingController3Service',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'enqueue.client.default.producer' => 'getEnqueue_Client_Default_ProducerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'http_kernel' => 'getHttpKernelService',
            'messenger.default_bus' => 'getMessenger_DefaultBusService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'test.client' => 'getTest_ClientService',
            'test.private_services_locator' => 'getTest_PrivateServicesLocatorService',
            'test.service_container' => 'getTest_ServiceContainerService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\KernelInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Kernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Kernel\\MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'\\src\\Kernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectRepository.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
            include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\Gateway\\ArticleGateway.php';
            include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Adapter\\Repository\\ArticleRepository.php';
            include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\Gateway\\CategoryGateway.php';
            include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Adapter\\Repository\\CategoryRepository.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\ParamConverter\\ArticleConverter.php';
            include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\ParamConverter\\CategoryConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ErrorListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ParameterBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\container\\src\\ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ParameterBag\\ContainerBag.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernel.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\RequestStack.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\UrlHelper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\PruneableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ResetInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\TraceableAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Marshaller\\MarshallerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Marshaller\\DefaultMarshaller.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractTestSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\TestSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\SessionListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\AbstractExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\EventListener\\MessageLoggerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ValidatorBuilder.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Validation.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ContainerConstraintValidatorFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Loader\\LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Loader\\AutoMappingTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Loader\\PropertyInfoLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\Profiler.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Profiler\\FileProfilerStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\ProfilerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\ConfigDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\AjaxDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\EventDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\LoggerDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\TimeDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\MemoryDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DataCollector\\RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\DataCollector\\RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DataCollector\\CacheDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataExtractor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\FormDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\DataCollector\\ValidatorDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\DataCollector\\MessengerDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\DataCollector\\MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client\\DataCollector\\HttpClientDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Debug\\FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\stopwatch\\Stopwatch.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\TraceableControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\TraceableArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RequestContext.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\EventListener\\RouterListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyTypeExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyDescriptionExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyAccessExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyListExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyInfoExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyInitializableExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\PropertyInfoExtractor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Environment.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\AppVariable.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Loader\\FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Profiler\\Profile.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\DataCollector\\TwigDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CodeExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\RoutingExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\Extension\\DebugExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\RuntimeLoader\\RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\twig\\src\\RuntimeLoader\\ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src\\MissingExtensionSuggestor.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\cssinliner-extra\\src\\CssInlinerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\twig\\inky-extra\\src\\InkyExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\SQLLogger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Logger\\DbalLogger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\DataCollector\\DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\DataCollector\\DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Registry.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Twig\\DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\DebugStack.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\LoggerChain.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Repository\\RepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ContainerRepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ObjectInitializerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Validator\\DoctrineInitializer.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\NamingStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\QuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Configuration.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\DoctrineProvider.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Mapping\\EntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\EntityListenerServiceResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Mapping\\ContainerEntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ManagerConfigurator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Persistence\\ObjectManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Validator\\DoctrineLoader.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Twig\\WebProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\DataDumperInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Cloner\\DumperInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\AbstractDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\CliDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\var-dumper\\Dumper\\HtmlDumper.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\service-contracts\\ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Token\\Storage\\TokenStorage.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Role\\RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Role\\RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallMap.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\RememberMe\\ResponseListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\SecurityExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\DataCollector\\SecurityDataCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\TraceableAccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\EventListener\\FirewallListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Debug\\TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\ControllerListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ParamConverter\\DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Templating\\TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\TemplateListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\SecurityListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\EventListener\\IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src\\Request\\ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\queue-interop\\queue-interop\\src\\ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\queue-interop\\queue-interop\\src\\Context.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\Config.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\RouteCollection.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\PreSendEventExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\PreSendCommandExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\DriverPreSendExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\PostSendExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\ChainExtension.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Rpc\\RpcFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\DriverInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue-bundle\\Profiler\\AbstractMessageQueueCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue-bundle\\Profiler\\MessageQueueCollector.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client-contracts\\HttpClientInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client\\TraceableHttpClient.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-client\\HttpClient.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\dama\\doctrine-test-bundle\\src\\DAMA\\DoctrineTestBundle\\Doctrine\\DBAL\\StaticConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\dama\\doctrine-test-bundle\\src\\DAMA\\DoctrineTestBundle\\Doctrine\\Cache\\StaticArrayCache.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\ConnectionFactoryFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Doctrine\\DoctrineConnectionFactoryFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\DriverFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Doctrine\\DoctrineDriverFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\AbstractLogger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Log\\Logger.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Mapping\\Factory\\MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Validator\\ValidatorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\event-dispatcher\\src\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher-contracts\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\ProducerInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\Producer.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\MessageBusInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\MessageBus.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\ConnectionFactoryFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\DriverFactory.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache-contracts\\CacheTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ContractsTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\FilesystemTrait.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\FilesystemAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\ArrayAdapter.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\TraceableMessageBus.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Matcher\\UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Generator\\UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\RouterInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Matcher\\RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Router.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\Router.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Validator\\TraceableValidator.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Debug\\TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\TraceableProducer.php';
            include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Article\CreateController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Article\CreateController
     */
    protected function getCreateControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Article\\CreateController.php';

        return $this->services['App\\UserInterface\\Controller\\Article\\CreateController'] = new \App\UserInterface\Controller\Article\CreateController(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Article\ListingController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Article\ListingController
     */
    protected function getListingControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Article\\ListingController.php';

        return $this->services['App\\UserInterface\\Controller\\Article\\ListingController'] = new \App\UserInterface\Controller\Article\ListingController(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Article\RemoveController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Article\RemoveController
     */
    protected function getRemoveControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Article\\RemoveController.php';

        return $this->services['App\\UserInterface\\Controller\\Article\\RemoveController'] = new \App\UserInterface\Controller\Article\RemoveController(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Article\UpdateController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Article\UpdateController
     */
    protected function getUpdateControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Article\\UpdateController.php';

        return $this->services['App\\UserInterface\\Controller\\Article\\UpdateController'] = new \App\UserInterface\Controller\Article\UpdateController(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Category\CreateController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Category\CreateController
     */
    protected function getCreateController2Service()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Category\\CreateController.php';

        return $this->services['App\\UserInterface\\Controller\\Category\\CreateController'] = new \App\UserInterface\Controller\Category\CreateController(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Category\ListingController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Category\ListingController
     */
    protected function getListingController2Service()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Category\\ListingController.php';

        return $this->services['App\\UserInterface\\Controller\\Category\\ListingController'] = new \App\UserInterface\Controller\Category\ListingController(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Category\RemoveController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Category\RemoveController
     */
    protected function getRemoveController2Service()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Category\\RemoveController.php';

        return $this->services['App\\UserInterface\\Controller\\Category\\RemoveController'] = new \App\UserInterface\Controller\Category\RemoveController(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Category\UpdateController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Category\UpdateController
     */
    protected function getUpdateController2Service()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Category\\UpdateController.php';

        return $this->services['App\\UserInterface\\Controller\\Category\\UpdateController'] = new \App\UserInterface\Controller\Category\UpdateController(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\LoginController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\LoginController
     */
    protected function getLoginControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\LoginController.php';

        return $this->services['App\\UserInterface\\Controller\\LoginController'] = new \App\UserInterface\Controller\LoginController(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\LogoutController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\LogoutController
     */
    protected function getLogoutControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\LogoutController.php';

        return $this->services['App\\UserInterface\\Controller\\LogoutController'] = new \App\UserInterface\Controller\LogoutController();
    }

    /**
     * Gets the public 'App\UserInterface\Controller\RegistrationController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\RegistrationController
     */
    protected function getRegistrationControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\RegistrationController.php';

        return $this->services['App\\UserInterface\\Controller\\RegistrationController'] = new \App\UserInterface\Controller\RegistrationController(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Security\AskPasswordResetController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Security\AskPasswordResetController
     */
    protected function getAskPasswordResetControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Security\\AskPasswordResetController.php';

        return $this->services['App\\UserInterface\\Controller\\Security\\AskPasswordResetController'] = new \App\UserInterface\Controller\Security\AskPasswordResetController(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Security\RecoverPasswordController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Security\RecoverPasswordController
     */
    protected function getRecoverPasswordControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Security\\RecoverPasswordController.php';

        return $this->services['App\\UserInterface\\Controller\\Security\\RecoverPasswordController'] = new \App\UserInterface\Controller\Security\RecoverPasswordController(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Security\Role\CreateController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Security\Role\CreateController
     */
    protected function getCreateController3Service()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Security\\Role\\CreateController.php';

        return $this->services['App\\UserInterface\\Controller\\Security\\Role\\CreateController'] = new \App\UserInterface\Controller\Security\Role\CreateController(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the public 'App\UserInterface\Controller\Security\User\ListingController' shared autowired service.
     *
     * @return \App\UserInterface\Controller\Security\User\ListingController
     */
    protected function getListingController3Service()
    {
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Controller\\Security\\User\\ListingController.php';

        return $this->services['App\\UserInterface\\Controller\\Security\\User\\ListingController'] = new \App\UserInterface\Controller\Security\User\ListingController(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.app.recorder_inner'] ?? $this->getCache_App_RecorderInnerService()));
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService())]);
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()), 'cache.doctrine.orm.default.metadata' => ($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()), 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()), 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.system.recorder_inner'] ?? $this->getCache_System_RecorderInnerService()));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheClearer\\ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 1 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 2 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 3 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
            yield 4 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 5 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
        }, 6), true, ($this->targetDir.''.'/App_KernelTestDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\CommandLoader\\CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\CommandLoader\\ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.messenger_consume_messages' => ['privates', 'console.command.messenger_consume_messages', 'getConsole_Command_MessengerConsumeMessagesService', false],
            'console.command.messenger_debug' => ['privates', 'console.command.messenger_debug', 'getConsole_Command_MessengerDebugService', false],
            'console.command.messenger_failed_messages_remove' => ['privates', 'console.command.messenger_failed_messages_remove', 'getConsole_Command_MessengerFailedMessagesRemoveService', false],
            'console.command.messenger_failed_messages_retry' => ['privates', 'console.command.messenger_failed_messages_retry', 'getConsole_Command_MessengerFailedMessagesRetryService', false],
            'console.command.messenger_failed_messages_show' => ['privates', 'console.command.messenger_failed_messages_show', 'getConsole_Command_MessengerFailedMessagesShowService', false],
            'console.command.messenger_setup_transports' => ['privates', 'console.command.messenger_setup_transports', 'getConsole_Command_MessengerSetupTransportsService', false],
            'console.command.messenger_stop_workers' => ['privates', 'console.command.messenger_stop_workers', 'getConsole_Command_MessengerStopWorkersService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.fixtures_load_command' => ['privates', 'doctrine.fixtures_load_command', 'getDoctrine_FixturesLoadCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'enqueue.client.consume_command' => ['privates', 'enqueue.client.consume_command', 'getEnqueue_Client_ConsumeCommandService', false],
            'enqueue.client.produce_command' => ['privates', 'enqueue.client.produce_command', 'getEnqueue_Client_ProduceCommandService', false],
            'enqueue.client.routes_command' => ['privates', 'enqueue.client.routes_command', 'getEnqueue_Client_RoutesCommandService', false],
            'enqueue.client.setup_broker_command' => ['privates', 'enqueue.client.setup_broker_command', 'getEnqueue_Client_SetupBrokerCommandService', false],
            'enqueue.transport.consume_command' => ['privates', 'enqueue.transport.consume_command', 'getEnqueue_Transport_ConsumeCommandService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
        ], [
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.messenger_consume_messages' => 'Symfony\\Component\\Messenger\\Command\\ConsumeMessagesCommand',
            'console.command.messenger_debug' => 'Symfony\\Component\\Messenger\\Command\\DebugCommand',
            'console.command.messenger_failed_messages_remove' => 'Symfony\\Component\\Messenger\\Command\\FailedMessagesRemoveCommand',
            'console.command.messenger_failed_messages_retry' => 'Symfony\\Component\\Messenger\\Command\\FailedMessagesRetryCommand',
            'console.command.messenger_failed_messages_show' => 'Symfony\\Component\\Messenger\\Command\\FailedMessagesShowCommand',
            'console.command.messenger_setup_transports' => 'Symfony\\Component\\Messenger\\Command\\SetupTransportsCommand',
            'console.command.messenger_stop_workers' => 'Symfony\\Component\\Messenger\\Command\\StopWorkersCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.fixtures_load_command' => 'Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand',
            'enqueue.client.consume_command' => 'Enqueue\\Symfony\\Client\\ConsumeCommand',
            'enqueue.client.produce_command' => 'Enqueue\\Symfony\\Client\\ProduceCommand',
            'enqueue.client.routes_command' => 'Enqueue\\Symfony\\Client\\RoutesCommand',
            'enqueue.client.setup_broker_command' => 'Enqueue\\Symfony\\Client\\SetupBrokerCommand',
            'enqueue.transport.consume_command' => 'Enqueue\\Symfony\\Consumption\\ConfigurableConsumeCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'messenger:consume' => 'console.command.messenger_consume_messages', 'messenger:setup-transports' => 'console.command.messenger_setup_transports', 'debug:messenger' => 'console.command.messenger_debug', 'messenger:stop-workers' => 'console.command.messenger_stop_workers', 'messenger:failed:retry' => 'console.command.messenger_failed_messages_retry', 'messenger:failed:show' => 'console.command.messenger_failed_messages_show', 'messenger:failed:remove' => 'console.command.messenger_failed_messages_remove', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'dbal:run-sql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'doctrine:fixtures:load' => 'doctrine.fixtures_load_command', 'security:encode-password' => 'security.command.user_password_encoder', 'enqueue:transport:consume' => 'enqueue.transport.consume_command', 'enqueue:consume' => 'enqueue.client.consume_command', 'enqueue:produce' => 'enqueue.client.produce_command', 'enqueue:setup-broker' => 'enqueue.client.setup_broker_command', 'enqueue:routes' => 'enqueue.client.routes_command']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        return $this->services['doctrine.dbal.default_connection'] = ($this->privates['dama.doctrine.dbal.connection_factory'] ?? $this->getDama_Doctrine_Dbal_ConnectionFactoryService())->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driver' => 'pdo_mysql', 'driverOptions' => [], 'defaultTableOptions' => [], 'dama.keep_static' => true, 'dama.connection_name' => 'default'], ($this->privates['doctrine.dbal.default_connection.configuration'] ?? $this->getDoctrine_Dbal_DefaultConnection_ConfigurationService()), ($this->privates['doctrine.dbal.default_connection.event_manager'] ?? $this->getDoctrine_Dbal_DefaultConnection_EventManagerService()), []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->privates['doctrine.orm.default_configuration'] ?? $this->getDoctrine_Orm_DefaultConfigurationService()));

        ($this->privates['doctrine.orm.default_manager_configurator'] ?? ($this->privates['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], [])))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'enqueue.client.default.producer' shared service.
     *
     * @return \Enqueue\Client\TraceableProducer
     */
    protected function getEnqueue_Client_Default_ProducerService()
    {
        return $this->services['enqueue.client.default.producer'] = new \Enqueue\Client\TraceableProducer(($this->privates['enqueue.client.default.traceable_producer.inner'] ?? $this->getEnqueue_Client_Default_TraceableProducer_InnerService()));
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ErrorController.php';

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', ($this->privates['error_handler.error_renderer.serializer'] ?? $this->getErrorHandler_ErrorRenderer_SerializerService()));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(($this->privates['debug.event_dispatcher.inner'] ?? ($this->privates['debug.event_dispatcher.inner'] = new \Symfony\Component\EventDispatcher\EventDispatcher())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['App\\Infrastructure\\EventListener\\ExceptionListener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelRequest'], 192);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['test.session.listener'] ?? $this->getTest_Session_ListenerService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageFailedEvent', [0 => function () {
            return ($this->privates['messenger.retry.send_failed_message_for_retry_listener'] ?? $this->getMessenger_Retry_SendFailedMessageForRetryListenerService());
        }, 1 => 'onMessageFailed'], 100);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageFailedEvent', [0 => function () {
            return ($this->privates['messenger.failure.send_failed_message_to_failure_transport_listener'] ?? $this->getMessenger_Failure_SendFailedMessageToFailureTransportListenerService());
        }, 1 => 'onMessageFailed'], -100);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerStartedEvent', [0 => function () {
            return ($this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] ?? $this->getMessenger_Listener_StopWorkerOnRestartSignalListenerService());
        }, 1 => 'onWorkerStarted'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerRunningEvent', [0 => function () {
            return ($this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] ?? $this->getMessenger_Listener_StopWorkerOnRestartSignalListenerService());
        }, 1 => 'onWorkerRunning'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->getTwig_Mailer_MessageListenerService());
        }, 1 => 'onMessage'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageHandledEvent', [0 => function () {
            return ($this->privates['doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager'] ?? $this->getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService());
        }, 1 => 'onWorkerMessageHandled'], 0);
        $instance->addListener('Symfony\\Component\\Messenger\\Event\\WorkerMessageFailedEvent', [0 => function () {
            return ($this->privates['doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager'] ?? $this->getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService());
        }, 1 => 'onWorkerMessageFailed'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->getDebug_Security_Voter_VoteListenerService());
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['enqueue.client.default.flush_spool_producer_listener'] ?? $this->getEnqueue_Client_Default_FlushSpoolProducerListenerService());
        }, 1 => 'flushMessages'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['enqueue.client.default.flush_spool_producer_listener'] ?? $this->getEnqueue_Client_Default_FlushSpoolProducerListenerService());
        }, 1 => 'flushMessages'], 0);

        return $instance;
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormFactory.php';

        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php';

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(NULL);
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['debug.controller_resolver'] ?? $this->getDebug_ControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['debug.argument_resolver'] ?? $this->getDebug_ArgumentResolverService()));
    }

    /**
     * Gets the public 'messenger.default_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\TraceableMessageBus
     */
    protected function getMessenger_DefaultBusService()
    {
        return $this->services['messenger.default_bus'] = new \Symfony\Component\Messenger\TraceableMessageBus(($this->privates['debug.traced.messenger.bus.default.inner'] ?? $this->getDebug_Traced_Messenger_Bus_Default_InnerService()));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(($this->privates['profiler.storage'] ?? ($this->privates['profiler.storage'] = new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), false);

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(($this->privates['data_collector.time'] ?? $this->getDataCollector_TimeService()));
        $instance->add(($this->privates['data_collector.memory'] ?? ($this->privates['data_collector.memory'] = new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector())));
        $instance->add(($this->privates['data_collector.validator'] ?? $this->getDataCollector_ValidatorService()));
        $instance->add(($this->privates['data_collector.ajax'] ?? ($this->privates['data_collector.ajax'] = new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector())));
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(($this->privates['data_collector.exception'] ?? ($this->privates['data_collector.exception'] = new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector())));
        $instance->add(($this->privates['data_collector.logger'] ?? $this->getDataCollector_LoggerService()));
        $instance->add(($this->privates['data_collector.events'] ?? $this->getDataCollector_EventsService()));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add(($this->privates['data_collector.cache'] ?? $this->getDataCollector_CacheService()));
        $instance->add(($this->privates['data_collector.security'] ?? $this->getDataCollector_SecurityService()));
        $instance->add(($this->privates['data_collector.twig'] ?? $this->getDataCollector_TwigService()));
        $instance->add(($this->privates['data_collector.http_client'] ?? $this->getDataCollector_HttpClientService()));
        $instance->add(($this->privates['data_collector.doctrine'] ?? $this->getDataCollector_DoctrineService()));
        $instance->add(($this->privates['data_collector.messenger'] ?? $this->getDataCollector_MessengerService()));
        $instance->add(($this->privates['mailer.data_collector'] ?? $this->getMailer_DataCollectorService()));
        $instance->add(($this->privates['enqueue.profiler.message_queue_collector'] ?? $this->getEnqueue_Profiler_MessageQueueCollectorService()));
        $instance->add(($this->privates['data_collector.config'] ?? $this->getDataCollector_ConfigService()));

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\DelegatingLoader.php';

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['routing.resolver'] ?? $this->getRouting_ResolverService()), ['utf8' => true]);
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Authentication\\AuthenticationUtils.php';

        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\UriSafeTokenGenerator.php';

        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(($this->privates['security.csrf.token_generator'] ?? ($this->privates['security.csrf.token_generator'] = new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator())), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\UserPasswordEncoder.php';

        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Serializer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ProblemNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\JsonSerializableNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateTimeNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateTimeZoneNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateIntervalNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ArrayDenormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\XmlEncoder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\JsonEncoder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\YamlEncoder.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\CsvEncoder.php';

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => ($this->privates['serializer.normalizer.problem'] ?? ($this->privates['serializer.normalizer.problem'] = new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true))), 1 => ($this->privates['serializer.normalizer.json_serializable'] ?? ($this->privates['serializer.normalizer.json_serializable'] = new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer())), 2 => ($this->privates['serializer.normalizer.datetime'] ?? ($this->privates['serializer.normalizer.datetime'] = new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer())), 3 => ($this->privates['serializer.normalizer.constraint_violation_list'] ?? $this->getSerializer_Normalizer_ConstraintViolationListService()), 4 => ($this->privates['serializer.normalizer.datetimezone'] ?? ($this->privates['serializer.normalizer.datetimezone'] = new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer())), 5 => ($this->privates['serializer.normalizer.dateinterval'] ?? ($this->privates['serializer.normalizer.dateinterval'] = new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer())), 6 => ($this->privates['serializer.normalizer.data_uri'] ?? $this->getSerializer_Normalizer_DataUriService()), 7 => ($this->privates['serializer.denormalizer.array'] ?? ($this->privates['serializer.denormalizer.array'] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer())), 8 => ($this->privates['serializer.normalizer.object'] ?? $this->getSerializer_Normalizer_ObjectService())], [0 => ($this->privates['serializer.encoder.xml'] ?? ($this->privates['serializer.encoder.xml'] = new \Symfony\Component\Serializer\Encoder\XmlEncoder())), 1 => ($this->privates['serializer.encoder.json'] ?? ($this->privates['serializer.encoder.json'] = new \Symfony\Component\Serializer\Encoder\JsonEncoder())), 2 => ($this->privates['serializer.encoder.yaml'] ?? ($this->privates['serializer.encoder.yaml'] = new \Symfony\Component\Serializer\Encoder\YamlEncoder())), 3 => ($this->privates['serializer.encoder.csv'] ?? ($this->privates['serializer.encoder.csv'] = new \Symfony\Component\Serializer\Encoder\CsvEncoder()))]);
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DependencyInjection\\ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->privates['messenger.transport.in_memory.factory'])) {
                yield 'messenger.transport.in_memory.factory' => ($this->privates['messenger.transport.in_memory.factory'] ?? null);
            }
            if (isset($this->services['profiler'])) {
                yield 'profiler' => ($this->services['profiler'] ?? null);
            }
            if (isset($this->services['validator'])) {
                yield 'debug.validator' => ($this->services['validator'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($this->services['event_dispatcher'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['cache.messenger.restart_workers_signal'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->privates['messenger.transport.in_memory.factory'])) + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['event_dispatcher'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'cache.messenger.restart_workers_signal' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'messenger.transport.in_memory.factory' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.validator' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Session.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.mock_file'] ?? $this->getSession_Storage_MockFileService()));
    }

    /**
     * Gets the public 'test.client' service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\KernelBrowser
     */
    protected function getTest_ClientService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\AbstractBrowser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\HttpKernelBrowser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\KernelBrowser.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\History.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\CookieJar.php';

        return new \Symfony\Bundle\FrameworkBundle\KernelBrowser(($this->services['kernel'] ?? $this->get('kernel', 1)), [], (new \Symfony\Component\BrowserKit\History()), (new \Symfony\Component\BrowserKit\CookieJar()));
    }

    /**
     * Gets the public 'test.private_services_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getTest_PrivateServicesLocatorService()
    {
        return $this->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Infrastructure\\Adapter\\Provider\\MailProvider' => ['privates', 'App\\Infrastructure\\Adapter\\Provider\\MailProvider', 'getMailProviderService', false],
            'App\\Infrastructure\\Adapter\\Repository\\ArticleRepository' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\ArticleRepository', 'getArticleRepositoryService', false],
            'App\\Infrastructure\\Adapter\\Repository\\CategoryRepository' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\CategoryRepository', 'getCategoryRepositoryService', false],
            'App\\Infrastructure\\Adapter\\Repository\\RoleRepository' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\RoleRepository', 'getRoleRepositoryService', false],
            'App\\Infrastructure\\Adapter\\Repository\\UserRepository' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\UserRepository', 'getUserRepositoryService', false],
            'App\\Infrastructure\\Doctrine\\DataFixtures\\ArticleFixtures' => ['privates', 'App\\Infrastructure\\Doctrine\\DataFixtures\\ArticleFixtures', 'getArticleFixturesService', false],
            'App\\Infrastructure\\Doctrine\\DataFixtures\\UserFixtures' => ['privates', 'App\\Infrastructure\\Doctrine\\DataFixtures\\UserFixtures', 'getUserFixturesService', false],
            'App\\Infrastructure\\EventListener\\ExceptionListener' => ['privates', 'App\\Infrastructure\\EventListener\\ExceptionListener', 'getExceptionListenerService', false],
            'App\\Infrastructure\\ParamConverter\\ArticleConverter' => ['privates', 'App\\Infrastructure\\ParamConverter\\ArticleConverter', 'getArticleConverterService', false],
            'App\\Infrastructure\\ParamConverter\\CategoryConverter' => ['privates', 'App\\Infrastructure\\ParamConverter\\CategoryConverter', 'getCategoryConverterService', false],
            'App\\Infrastructure\\Security\\Guard\\WebAuthenticator' => ['privates', 'App\\Infrastructure\\Security\\Guard\\WebAuthenticator', 'getWebAuthenticatorService', false],
            'App\\Infrastructure\\Security\\Provider\\UserProvider' => ['privates', 'App\\Infrastructure\\Security\\Provider\\UserProvider', 'getUserProviderService', false],
            'App\\Infrastructure\\Validator\\NonUniqueEmailValidator' => ['privates', 'App\\Infrastructure\\Validator\\NonUniqueEmailValidator', 'getNonUniqueEmailValidatorService', false],
            'App\\Infrastructure\\Validator\\NonUniquePseudoValidator' => ['privates', 'App\\Infrastructure\\Validator\\NonUniquePseudoValidator', 'getNonUniquePseudoValidatorService', false],
            'App\\UserInterface\\Form\\ArticleType' => ['privates', 'App\\UserInterface\\Form\\ArticleType', 'getArticleTypeService', false],
            'App\\UserInterface\\Form\\CategoryType' => ['privates', 'App\\UserInterface\\Form\\CategoryType', 'getCategoryTypeService', false],
            'App\\UserInterface\\Form\\RecoverPasswordType' => ['privates', 'App\\UserInterface\\Form\\RecoverPasswordType', 'getRecoverPasswordTypeService', false],
            'App\\UserInterface\\Form\\RegistrationType' => ['privates', 'App\\UserInterface\\Form\\RegistrationType', 'getRegistrationTypeService', false],
            'App\\UserInterface\\Form\\ResetPasswordType' => ['privates', 'App\\UserInterface\\Form\\ResetPasswordType', 'getResetPasswordTypeService', false],
            'App\\UserInterface\\Form\\RoleType' => ['privates', 'App\\UserInterface\\Form\\RoleType', 'getRoleTypeService', false],
            'App\\UserInterface\\Presenter\\Article\\CreatePresenter' => ['privates', 'App\\UserInterface\\Presenter\\Article\\CreatePresenter', 'getCreatePresenter3Service', false],
            'App\\UserInterface\\Presenter\\Article\\RemovePresenter' => ['privates', 'App\\UserInterface\\Presenter\\Article\\RemovePresenter', 'getRemovePresenter2Service', false],
            'App\\UserInterface\\Presenter\\Article\\UpdatePresenter' => ['privates', 'App\\UserInterface\\Presenter\\Article\\UpdatePresenter', 'getUpdatePresenterService', false],
            'App\\UserInterface\\Presenter\\Category\\CreatePresenter' => ['privates', 'App\\UserInterface\\Presenter\\Category\\CreatePresenter', 'getCreatePresenterService', false],
            'App\\UserInterface\\Presenter\\Category\\RemovePresenter' => ['privates', 'App\\UserInterface\\Presenter\\Category\\RemovePresenter', 'getRemovePresenterService', false],
            'App\\UserInterface\\Presenter\\Category\\UpdatePresenter' => ['privates', 'App\\UserInterface\\Presenter\\Category\\UpdatePresenter', 'getUpdatePresenter2Service', false],
            'App\\UserInterface\\Presenter\\RegistrationPresenter' => ['privates', 'App\\UserInterface\\Presenter\\RegistrationPresenter', 'getRegistrationPresenterService', false],
            'App\\UserInterface\\Presenter\\Security\\AskPasswordResetPresenter' => ['privates', 'App\\UserInterface\\Presenter\\Security\\AskPasswordResetPresenter', 'getAskPasswordResetPresenterService', false],
            'App\\UserInterface\\Presenter\\Security\\RecoverPasswordPresenter' => ['privates', 'App\\UserInterface\\Presenter\\Security\\RecoverPasswordPresenter', 'getRecoverPasswordPresenterService', false],
            'App\\UserInterface\\Presenter\\Security\\Role\\CreatePresenter' => ['privates', 'App\\UserInterface\\Presenter\\Security\\Role\\CreatePresenter', 'getCreatePresenter2Service', false],
            'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider' => ['privates', 'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider', 'getManagerRegistryAwareConnectionProviderService', false],
            'Doctrine\\Common\\Annotations\\Reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'Doctrine\\DBAL\\Connection' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'Doctrine\\DBAL\\Driver\\Connection' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', false],
            'Doctrine\\ORM\\EntityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'Doctrine\\Persistence\\ManagerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
            'Enqueue\\Client\\DriverInterface' => ['privates', 'enqueue.client.default.driver', 'getEnqueue_Client_Default_DriverService', false],
            'Enqueue\\Client\\ProducerInterface' => ['privates', 'enqueue.client.default.lazy_producer', 'getEnqueue_Client_Default_LazyProducerService', false],
            'Enqueue\\Client\\SpoolProducer' => ['privates', 'enqueue.client.default.spool_producer', 'getEnqueue_Client_Default_SpoolProducerService', false],
            'Enqueue\\Consumption\\QueueConsumerInterface' => ['privates', 'enqueue.transport.default.queue_consumer', 'getEnqueue_Transport_Default_QueueConsumerService', false],
            'Interop\\Queue\\ConnectionFactory' => ['privates', 'enqueue.transport.default.connection_factory', 'getEnqueue_Transport_Default_ConnectionFactoryService', false],
            'Interop\\Queue\\Context' => ['privates', 'enqueue.transport.default.context', 'getEnqueue_Transport_Default_ContextService', false],
            'Psr\\Cache\\CacheItemPoolInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Psr\\Container\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Psr\\Container\\ContainerInterface $parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Psr\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Psr\\Log\\LoggerInterface' => ['privates', 'logger', 'getLoggerService', false],
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Component\\Filesystem\\Filesystem' => ['services', 'filesystem', 'getFilesystemService', false],
            'Symfony\\Component\\Form\\FormFactoryInterface' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'Symfony\\Component\\Form\\FormRegistryInterface' => ['privates', 'form.registry', 'getForm_RegistryService', false],
            'Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface' => ['privates', 'form.resolved_type_factory', 'getForm_ResolvedTypeFactoryService', false],
            'Symfony\\Component\\HttpFoundation\\RequestStack' => ['services', 'request_stack', 'getRequestStackService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => ['privates', 'session.flash_bag', 'getSession_FlashBagService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => ['services', 'session', 'getSessionService', false],
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'Symfony\\Component\\HttpFoundation\\UrlHelper' => ['privates', 'url_helper', 'getUrlHelperService', false],
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'Symfony\\Component\\HttpKernel\\KernelInterface' => ['services', 'kernel', 'getKernelService', false],
            'Symfony\\Component\\Messenger\\MessageBusInterface' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
            'Symfony\\Component\\Messenger\\Transport\\Serialization\\SerializerInterface' => ['privates', 'messenger.transport.native_php_serializer', 'getMessenger_Transport_NativePhpSerializerService', false],
            'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => ['privates', 'property_accessor', 'getPropertyAccessorService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RequestContext' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Routing\\RouterInterface' => ['services', 'router', 'getRouterService', false],
            'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface' => ['privates', 'security.authentication.manager', 'getSecurity_Authentication_ManagerService', false],
            'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface' => ['privates', 'debug.security.access.decision_manager', 'getDebug_Security_Access_DecisionManagerService', false],
            'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface' => ['privates', 'security.encoder_factory.generic', 'getSecurity_EncoderFactory_GenericService', false],
            'Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface' => ['privates', 'security.role_hierarchy', 'getSecurity_RoleHierarchyService', false],
            'Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'Symfony\\Component\\Security\\Core\\User\\UserProviderInterface' => ['privates', 'App\\Infrastructure\\Security\\Provider\\UserProvider', 'getUserProviderService', false],
            'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', false],
            'Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface' => ['privates', 'security.csrf.token_storage', 'getSecurity_Csrf_TokenStorageService', false],
            'Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', false],
            'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
            'Symfony\\Component\\Security\\Http\\Firewall' => ['privates', 'debug.security.firewall', 'getDebug_Security_FirewallService', false],
            'Symfony\\Component\\Security\\Http\\HttpUtils' => ['privates', 'security.http_utils', 'getSecurity_HttpUtilsService', false],
            'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface' => ['privates', 'security.authentication.session_strategy', 'getSecurity_Authentication_SessionStrategyService', false],
            'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface' => ['privates', 'serializer.mapping.class_discriminator_resolver', 'getSerializer_Mapping_ClassDiscriminatorResolverService', false],
            'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface' => ['privates', 'serializer.mapping.class_metadata_factory', 'getSerializer_Mapping_ClassMetadataFactoryService', false],
            'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer' => ['privates', 'serializer.normalizer.object', 'getSerializer_Normalizer_ObjectService', false],
            'Symfony\\Component\\Serializer\\SerializerInterface' => ['services', 'serializer', 'getSerializerService', false],
            'Symfony\\Component\\Stopwatch\\Stopwatch' => ['privates', 'debug.stopwatch', 'getDebug_StopwatchService', false],
            'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => ['services', 'validator', 'getValidatorService', false],
            'Symfony\\Contracts\\Cache\\CacheInterface' => ['services', 'cache.app', 'getCache_AppService', false],
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'Symfony\\Contracts\\HttpClient\\HttpClientInterface' => ['privates', '.debug.http_client', 'get_Debug_HttpClientService', false],
            'TYannis\\SDS\\Domain\\Blog\\Gateway\\ArticleGateway' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\ArticleRepository', 'getArticleRepositoryService', false],
            'TYannis\\SDS\\Domain\\Blog\\Gateway\\CategoryGateway' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\CategoryRepository', 'getCategoryRepositoryService', false],
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Article\\CreatePresenterInterface' => ['privates', 'App\\UserInterface\\Presenter\\Article\\CreatePresenter', 'getCreatePresenter3Service', false],
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Article\\RemovePresenterInterface' => ['privates', 'App\\UserInterface\\Presenter\\Article\\RemovePresenter', 'getRemovePresenter2Service', false],
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Article\\UpdatePresenterInterface' => ['privates', 'App\\UserInterface\\Presenter\\Article\\UpdatePresenter', 'getUpdatePresenterService', false],
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Category\\CreatePresenterInterface' => ['privates', 'App\\UserInterface\\Presenter\\Category\\CreatePresenter', 'getCreatePresenterService', false],
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Category\\RemovePresenterInterface' => ['privates', 'App\\UserInterface\\Presenter\\Category\\RemovePresenter', 'getRemovePresenterService', false],
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Category\\UpdatePresenterInterface' => ['privates', 'App\\UserInterface\\Presenter\\Category\\UpdatePresenter', 'getUpdatePresenter2Service', false],
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Listing' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Listing', 'getListingService', false],
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Remove' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Remove', 'getRemove2Service', false],
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Update' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Update', 'getUpdateService', false],
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Create' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Create', 'getCreateService', false],
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Listing' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Listing', 'getListing2Service', false],
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Remove' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Remove', 'getRemoveService', false],
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Update' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Update', 'getUpdate2Service', false],
            'TYannis\\SDS\\Domain\\Security\\Gateway\\RoleGateway' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\RoleRepository', 'getRoleRepositoryService', false],
            'TYannis\\SDS\\Domain\\Security\\Gateway\\UserGateway' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\UserRepository', 'getUserRepositoryService', false],
            'TYannis\\SDS\\Domain\\Security\\Presenter\\AskPasswordResetPresenterInterface' => ['privates', 'App\\UserInterface\\Presenter\\Security\\AskPasswordResetPresenter', 'getAskPasswordResetPresenterService', false],
            'TYannis\\SDS\\Domain\\Security\\Presenter\\LoginPresenterInterface' => ['privates', 'App\\Infrastructure\\Security\\Guard\\WebAuthenticator', 'getWebAuthenticatorService', false],
            'TYannis\\SDS\\Domain\\Security\\Presenter\\RecoverPasswordPresenterInterface' => ['privates', 'App\\UserInterface\\Presenter\\Security\\RecoverPasswordPresenter', 'getRecoverPasswordPresenterService', false],
            'TYannis\\SDS\\Domain\\Security\\Presenter\\RegistrationPresenterInterface' => ['privates', 'App\\UserInterface\\Presenter\\RegistrationPresenter', 'getRegistrationPresenterService', false],
            'TYannis\\SDS\\Domain\\Security\\Presenter\\Role\\CreatePresenterInterface' => ['privates', 'App\\UserInterface\\Presenter\\Security\\Role\\CreatePresenter', 'getCreatePresenter2Service', false],
            'TYannis\\SDS\\Domain\\Security\\Provider\\MailProviderInterface' => ['privates', 'App\\Infrastructure\\Adapter\\Provider\\MailProvider', 'getMailProviderService', false],
            'TYannis\\SDS\\Domain\\Security\\UseCase\\AskPasswordReset' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\AskPasswordReset', 'getAskPasswordResetService', false],
            'TYannis\\SDS\\Domain\\Security\\UseCase\\Login' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\Login', 'getLoginService', false],
            'TYannis\\SDS\\Domain\\Security\\UseCase\\RecoverPassword' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\RecoverPassword', 'getRecoverPasswordService', false],
            'TYannis\\SDS\\Domain\\Security\\UseCase\\Registration' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\Registration', 'getRegistrationService', false],
            'TYannis\\SDS\\Domain\\Security\\UseCase\\Role\\Create' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\Role\\Create', 'getCreate2Service', false],
            'TYannis\\SDS\\Domain\\Security\\UseCase\\User\\Listing' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\User\\Listing', 'getListing3Service', false],
            'Twig\\Environment' => ['services', 'twig', 'getTwigService', false],
            'Twig_Environment' => ['services', 'twig', 'getTwigService', false],
            'annotation_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'annotations.cache' => ['privates', 'annotations.cache', 'getAnnotations_CacheService', false],
            'annotations.cache_warmer' => ['privates', 'annotations.cache_warmer', 'getAnnotations_CacheWarmerService', false],
            'annotations.cached_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'annotations.dummy_registry' => ['privates', 'annotations.dummy_registry', 'getAnnotations_DummyRegistryService', false],
            'annotations.reader' => ['privates', 'annotations.reader', 'getAnnotations_ReaderService', false],
            'argument_metadata_factory' => ['privates', 'argument_metadata_factory', 'getArgumentMetadataFactoryService', false],
            'argument_resolver' => ['privates', 'debug.argument_resolver', 'getDebug_ArgumentResolverService', false],
            'argument_resolver.controller_locator' => ['privates', '.service_locator.pRFRkqt', 'get_ServiceLocator_PRFRkqtService', false],
            'argument_resolver.default' => ['privates', 'debug.argument_resolver.default', 'getDebug_ArgumentResolver_DefaultService', false],
            'argument_resolver.not_tagged_controller' => ['privates', 'debug.argument_resolver.not_tagged_controller', 'getDebug_ArgumentResolver_NotTaggedControllerService', false],
            'argument_resolver.request' => ['privates', 'debug.argument_resolver.request', 'getDebug_ArgumentResolver_RequestService', false],
            'argument_resolver.request_attribute' => ['privates', 'debug.argument_resolver.request_attribute', 'getDebug_ArgumentResolver_RequestAttributeService', false],
            'argument_resolver.service' => ['privates', 'debug.argument_resolver.service', 'getDebug_ArgumentResolver_ServiceService', false],
            'argument_resolver.session' => ['privates', 'debug.argument_resolver.session', 'getDebug_ArgumentResolver_SessionService', false],
            'argument_resolver.variadic' => ['privates', 'debug.argument_resolver.variadic', 'getDebug_ArgumentResolver_VariadicService', false],
            'cache.annotations' => ['privates', 'cache.annotations', 'getCache_AnnotationsService', false],
            'cache.annotations.recorder_inner' => ['privates', 'cache.annotations.recorder_inner', 'getCache_Annotations_RecorderInnerService', false],
            'cache.app.recorder_inner' => ['privates', 'cache.app.recorder_inner', 'getCache_App_RecorderInnerService', false],
            'cache.default_clearer' => ['services', 'cache.app_clearer', 'getCache_AppClearerService', false],
            'cache.default_marshaller' => ['privates', 'cache.default_marshaller', 'getCache_DefaultMarshallerService', false],
            'cache.default_pdo_provider' => ['services', 'doctrine.dbal.default_connection', 'getDoctrine_Dbal_DefaultConnectionService', false],
            'cache.doctrine.orm.default.metadata' => ['privates', 'cache.doctrine.orm.default.metadata', 'getCache_Doctrine_Orm_Default_MetadataService', false],
            'cache.doctrine.orm.default.metadata.recorder_inner' => ['privates', 'cache.doctrine.orm.default.metadata.recorder_inner', 'getCache_Doctrine_Orm_Default_Metadata_RecorderInnerService', false],
            'cache.doctrine.orm.default.query' => ['privates', 'cache.doctrine.orm.default.query', 'getCache_Doctrine_Orm_Default_QueryService', false],
            'cache.doctrine.orm.default.query.recorder_inner' => ['privates', 'cache.doctrine.orm.default.query.recorder_inner', 'getCache_Doctrine_Orm_Default_Query_RecorderInnerService', false],
            'cache.doctrine.orm.default.result' => ['privates', 'cache.doctrine.orm.default.result', 'getCache_Doctrine_Orm_Default_ResultService', false],
            'cache.doctrine.orm.default.result.recorder_inner' => ['privates', 'cache.doctrine.orm.default.result.recorder_inner', 'getCache_Doctrine_Orm_Default_Result_RecorderInnerService', false],
            'cache.messenger.restart_workers_signal' => ['privates', 'cache.messenger.restart_workers_signal', 'getCache_Messenger_RestartWorkersSignalService', false],
            'cache.messenger.restart_workers_signal.recorder_inner' => ['privates', 'cache.messenger.restart_workers_signal.recorder_inner', 'getCache_Messenger_RestartWorkersSignal_RecorderInnerService', false],
            'cache.property_access' => ['privates', 'cache.property_access', 'getCache_PropertyAccessService', false],
            'cache.property_info' => ['privates', 'cache.property_info', 'getCache_PropertyInfoService', false],
            'cache.property_info.recorder_inner' => ['privates', 'cache.property_info.recorder_inner', 'getCache_PropertyInfo_RecorderInnerService', false],
            'cache.security_expression_language' => ['privates', 'cache.security_expression_language', 'getCache_SecurityExpressionLanguageService', false],
            'cache.security_expression_language.recorder_inner' => ['privates', 'cache.security_expression_language.recorder_inner', 'getCache_SecurityExpressionLanguage_RecorderInnerService', false],
            'cache.serializer' => ['privates', 'cache.serializer', 'getCache_SerializerService', false],
            'cache.serializer.recorder_inner' => ['privates', 'cache.serializer.recorder_inner', 'getCache_Serializer_RecorderInnerService', false],
            'cache.system.recorder_inner' => ['privates', 'cache.system.recorder_inner', 'getCache_System_RecorderInnerService', false],
            'cache.validator' => ['privates', 'cache.validator', 'getCache_ValidatorService', false],
            'cache.validator.recorder_inner' => ['privates', 'cache.validator.recorder_inner', 'getCache_Validator_RecorderInnerService', false],
            'chatter.messenger.chat_handler' => ['privates', 'chatter.messenger.chat_handler', 'getChatter_Messenger_ChatHandlerService', false],
            'chatter.transport_factory' => ['privates', 'chatter.transport_factory', 'getChatter_TransportFactoryService', false],
            'chatter.transports' => ['privates', 'chatter.transports', 'getChatter_TransportsService', false],
            'config.resource.self_checking_resource_checker' => ['privates', 'config.resource.self_checking_resource_checker', 'getConfig_Resource_SelfCheckingResourceCheckerService', false],
            'config_cache_factory' => ['privates', 'config_cache_factory', 'getConfigCacheFactoryService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.messenger_consume_messages' => ['privates', 'console.command.messenger_consume_messages', 'getConsole_Command_MessengerConsumeMessagesService', false],
            'console.command.messenger_debug' => ['privates', 'console.command.messenger_debug', 'getConsole_Command_MessengerDebugService', false],
            'console.command.messenger_failed_messages_remove' => ['privates', 'console.command.messenger_failed_messages_remove', 'getConsole_Command_MessengerFailedMessagesRemoveService', false],
            'console.command.messenger_failed_messages_retry' => ['privates', 'console.command.messenger_failed_messages_retry', 'getConsole_Command_MessengerFailedMessagesRetryService', false],
            'console.command.messenger_failed_messages_show' => ['privates', 'console.command.messenger_failed_messages_show', 'getConsole_Command_MessengerFailedMessagesShowService', false],
            'console.command.messenger_setup_transports' => ['privates', 'console.command.messenger_setup_transports', 'getConsole_Command_MessengerSetupTransportsService', false],
            'console.command.messenger_stop_workers' => ['privates', 'console.command.messenger_stop_workers', 'getConsole_Command_MessengerStopWorkersService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'console.error_listener' => ['privates', 'console.error_listener', 'getConsole_ErrorListenerService', false],
            'console.suggest_missing_package_subscriber' => ['privates', 'console.suggest_missing_package_subscriber', 'getConsole_SuggestMissingPackageSubscriberService', false],
            'container.env_var_processor' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'controller_resolver' => ['privates', 'debug.controller_resolver', 'getDebug_ControllerResolverService', false],
            'dama.doctrine.dbal.connection_factory' => ['privates', 'dama.doctrine.dbal.connection_factory', 'getDama_Doctrine_Dbal_ConnectionFactoryService', false],
            'dama.doctrine.dbal.connection_factory.inner' => ['privates', 'dama.doctrine.dbal.connection_factory.inner', 'getDama_Doctrine_Dbal_ConnectionFactory_InnerService', false],
            'data_collector.ajax' => ['privates', 'data_collector.ajax', 'getDataCollector_AjaxService', false],
            'data_collector.cache' => ['privates', 'data_collector.cache', 'getDataCollector_CacheService', false],
            'data_collector.config' => ['privates', 'data_collector.config', 'getDataCollector_ConfigService', false],
            'data_collector.doctrine' => ['privates', 'data_collector.doctrine', 'getDataCollector_DoctrineService', false],
            'data_collector.events' => ['privates', 'data_collector.events', 'getDataCollector_EventsService', false],
            'data_collector.exception' => ['privates', 'data_collector.exception', 'getDataCollector_ExceptionService', false],
            'data_collector.form' => ['privates', 'data_collector.form', 'getDataCollector_FormService', false],
            'data_collector.form.extractor' => ['privates', 'data_collector.form.extractor', 'getDataCollector_Form_ExtractorService', false],
            'data_collector.http_client' => ['privates', 'data_collector.http_client', 'getDataCollector_HttpClientService', false],
            'data_collector.logger' => ['privates', 'data_collector.logger', 'getDataCollector_LoggerService', false],
            'data_collector.memory' => ['privates', 'data_collector.memory', 'getDataCollector_MemoryService', false],
            'data_collector.messenger' => ['privates', 'data_collector.messenger', 'getDataCollector_MessengerService', false],
            'data_collector.request' => ['privates', 'data_collector.request', 'getDataCollector_RequestService', false],
            'data_collector.router' => ['privates', 'data_collector.router', 'getDataCollector_RouterService', false],
            'data_collector.security' => ['privates', 'data_collector.security', 'getDataCollector_SecurityService', false],
            'data_collector.time' => ['privates', 'data_collector.time', 'getDataCollector_TimeService', false],
            'data_collector.twig' => ['privates', 'data_collector.twig', 'getDataCollector_TwigService', false],
            'data_collector.validator' => ['privates', 'data_collector.validator', 'getDataCollector_ValidatorService', false],
            'debug.argument_resolver' => ['privates', 'debug.argument_resolver', 'getDebug_ArgumentResolverService', false],
            'debug.argument_resolver.default' => ['privates', 'debug.argument_resolver.default', 'getDebug_ArgumentResolver_DefaultService', false],
            'debug.argument_resolver.default.inner' => ['privates', 'debug.argument_resolver.default.inner', 'getDebug_ArgumentResolver_Default_InnerService', false],
            'debug.argument_resolver.inner' => ['privates', 'debug.argument_resolver.inner', 'getDebug_ArgumentResolver_InnerService', false],
            'debug.argument_resolver.not_tagged_controller' => ['privates', 'debug.argument_resolver.not_tagged_controller', 'getDebug_ArgumentResolver_NotTaggedControllerService', false],
            'debug.argument_resolver.not_tagged_controller.inner' => ['privates', 'debug.argument_resolver.not_tagged_controller.inner', 'getDebug_ArgumentResolver_NotTaggedController_InnerService', false],
            'debug.argument_resolver.request' => ['privates', 'debug.argument_resolver.request', 'getDebug_ArgumentResolver_RequestService', false],
            'debug.argument_resolver.request.inner' => ['privates', 'debug.argument_resolver.request.inner', 'getDebug_ArgumentResolver_Request_InnerService', false],
            'debug.argument_resolver.request_attribute' => ['privates', 'debug.argument_resolver.request_attribute', 'getDebug_ArgumentResolver_RequestAttributeService', false],
            'debug.argument_resolver.request_attribute.inner' => ['privates', 'debug.argument_resolver.request_attribute.inner', 'getDebug_ArgumentResolver_RequestAttribute_InnerService', false],
            'debug.argument_resolver.service' => ['privates', 'debug.argument_resolver.service', 'getDebug_ArgumentResolver_ServiceService', false],
            'debug.argument_resolver.service.inner' => ['privates', 'debug.argument_resolver.service.inner', 'getDebug_ArgumentResolver_Service_InnerService', false],
            'debug.argument_resolver.session' => ['privates', 'debug.argument_resolver.session', 'getDebug_ArgumentResolver_SessionService', false],
            'debug.argument_resolver.session.inner' => ['privates', 'debug.argument_resolver.session.inner', 'getDebug_ArgumentResolver_Session_InnerService', false],
            'debug.argument_resolver.variadic' => ['privates', 'debug.argument_resolver.variadic', 'getDebug_ArgumentResolver_VariadicService', false],
            'debug.argument_resolver.variadic.inner' => ['privates', 'debug.argument_resolver.variadic.inner', 'getDebug_ArgumentResolver_Variadic_InnerService', false],
            'debug.controller_resolver' => ['privates', 'debug.controller_resolver', 'getDebug_ControllerResolverService', false],
            'debug.controller_resolver.inner' => ['privates', 'debug.controller_resolver.inner', 'getDebug_ControllerResolver_InnerService', false],
            'debug.debug_handlers_listener' => ['privates', 'debug.debug_handlers_listener', 'getDebug_DebugHandlersListenerService', false],
            'debug.event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'debug.event_dispatcher.inner' => ['privates', 'debug.event_dispatcher.inner', 'getDebug_EventDispatcher_InnerService', false],
            'debug.file_link_formatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
            'debug.file_link_formatter.url_format' => ['privates', 'debug.file_link_formatter.url_format', 'getDebug_FileLinkFormatter_UrlFormatService', false],
            'debug.security.access.decision_manager' => ['privates', 'debug.security.access.decision_manager', 'getDebug_Security_Access_DecisionManagerService', false],
            'debug.security.access.decision_manager.inner' => ['privates', 'debug.security.access.decision_manager.inner', 'getDebug_Security_Access_DecisionManager_InnerService', false],
            'debug.security.firewall' => ['privates', 'debug.security.firewall', 'getDebug_Security_FirewallService', false],
            'debug.security.user_value_resolver' => ['privates', 'debug.security.user_value_resolver', 'getDebug_Security_UserValueResolverService', false],
            'debug.security.user_value_resolver.inner' => ['privates', 'debug.security.user_value_resolver.inner', 'getDebug_Security_UserValueResolver_InnerService', false],
            'debug.security.voter.security.access.authenticated_voter' => ['privates', 'debug.security.voter.security.access.authenticated_voter', 'getDebug_Security_Voter_Security_Access_AuthenticatedVoterService', false],
            'debug.security.voter.security.access.simple_role_voter' => ['privates', 'debug.security.voter.security.access.simple_role_voter', 'getDebug_Security_Voter_Security_Access_SimpleRoleVoterService', false],
            'debug.security.voter.vote_listener' => ['privates', 'debug.security.voter.vote_listener', 'getDebug_Security_Voter_VoteListenerService', false],
            'debug.stopwatch' => ['privates', 'debug.stopwatch', 'getDebug_StopwatchService', false],
            'debug.traced.messenger.bus.default' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
            'debug.traced.messenger.bus.default.inner' => ['privates', 'debug.traced.messenger.bus.default.inner', 'getDebug_Traced_Messenger_Bus_Default_InnerService', false],
            'debug.validator' => ['services', 'validator', 'getValidatorService', false],
            'debug.validator.inner' => ['privates', 'debug.validator.inner', 'getDebug_Validator_InnerService', false],
            'dependency_injection.config.container_parameters_resource_checker' => ['privates', 'dependency_injection.config.container_parameters_resource_checker', 'getDependencyInjection_Config_ContainerParametersResourceCheckerService', false],
            'disallow_search_engine_index_response_listener' => ['privates', 'disallow_search_engine_index_response_listener', 'getDisallowSearchEngineIndexResponseListenerService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.dbal.connection_factory' => ['privates', 'dama.doctrine.dbal.connection_factory', 'getDama_Doctrine_Dbal_ConnectionFactoryService', false],
            'doctrine.dbal.default_connection.configuration' => ['privates', 'doctrine.dbal.default_connection.configuration', 'getDoctrine_Dbal_DefaultConnection_ConfigurationService', false],
            'doctrine.dbal.default_connection.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.dbal.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.dbal.logger' => ['privates', 'doctrine.dbal.logger', 'getDoctrine_Dbal_LoggerService', false],
            'doctrine.dbal.logger.chain.default' => ['privates', 'doctrine.dbal.logger.chain.default', 'getDoctrine_Dbal_Logger_Chain_DefaultService', false],
            'doctrine.dbal.logger.profiling.default' => ['privates', 'doctrine.dbal.logger.profiling.default', 'getDoctrine_Dbal_Logger_Profiling_DefaultService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.fixtures.loader' => ['privates', 'doctrine.fixtures.loader', 'getDoctrine_Fixtures_LoaderService', false],
            'doctrine.fixtures.purger.orm_purger_factory' => ['privates', 'doctrine.fixtures.purger.orm_purger_factory', 'getDoctrine_Fixtures_Purger_OrmPurgerFactoryService', false],
            'doctrine.fixtures_load_command' => ['privates', 'doctrine.fixtures_load_command', 'getDoctrine_FixturesLoadCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService', false],
            'doctrine.orm.container_repository_factory' => ['privates', 'doctrine.orm.container_repository_factory', 'getDoctrine_Orm_ContainerRepositoryFactoryService', false],
            'doctrine.orm.default_annotation_metadata_driver' => ['privates', 'doctrine.orm.default_annotation_metadata_driver', 'getDoctrine_Orm_DefaultAnnotationMetadataDriverService', false],
            'doctrine.orm.default_configuration' => ['privates', 'doctrine.orm.default_configuration', 'getDoctrine_Orm_DefaultConfigurationService', false],
            'doctrine.orm.default_entity_listener_resolver' => ['privates', 'doctrine.orm.default_entity_listener_resolver', 'getDoctrine_Orm_DefaultEntityListenerResolverService', false],
            'doctrine.orm.default_entity_manager.event_manager' => ['privates', 'doctrine.dbal.default_connection.event_manager', 'getDoctrine_Dbal_DefaultConnection_EventManagerService', false],
            'doctrine.orm.default_entity_manager.property_info_extractor' => ['privates', 'doctrine.orm.default_entity_manager.property_info_extractor', 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService', false],
            'doctrine.orm.default_entity_manager.validator_loader' => ['privates', 'doctrine.orm.default_entity_manager.validator_loader', 'getDoctrine_Orm_DefaultEntityManager_ValidatorLoaderService', false],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
            'doctrine.orm.default_manager_configurator' => ['privates', 'doctrine.orm.default_manager_configurator', 'getDoctrine_Orm_DefaultManagerConfiguratorService', false],
            'doctrine.orm.default_metadata_cache' => ['privates', 'doctrine.orm.default_metadata_cache', 'getDoctrine_Orm_DefaultMetadataCacheService', false],
            'doctrine.orm.default_metadata_driver' => ['privates', 'doctrine.orm.default_metadata_driver', 'getDoctrine_Orm_DefaultMetadataDriverService', false],
            'doctrine.orm.default_query_cache' => ['privates', 'doctrine.orm.default_query_cache', 'getDoctrine_Orm_DefaultQueryCacheService', false],
            'doctrine.orm.default_result_cache' => ['privates', 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result', 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService', false],
            'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' => ['privates', 'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager', 'getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService', false],
            'doctrine.orm.metadata.annotation_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService', false],
            'doctrine.orm.naming_strategy.underscore_number_aware' => ['privates', 'doctrine.orm.naming_strategy.underscore_number_aware', 'getDoctrine_Orm_NamingStrategy_UnderscoreNumberAwareService', false],
            'doctrine.orm.proxy_cache_warmer' => ['privates', 'doctrine.orm.proxy_cache_warmer', 'getDoctrine_Orm_ProxyCacheWarmerService', false],
            'doctrine.orm.quote_strategy.default' => ['privates', 'doctrine.orm.quote_strategy.default', 'getDoctrine_Orm_QuoteStrategy_DefaultService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'doctrine.orm.validator_initializer' => ['privates', 'doctrine.orm.validator_initializer', 'getDoctrine_Orm_ValidatorInitializerService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine.twig.doctrine_extension' => ['privates', 'doctrine.twig.doctrine_extension', 'getDoctrine_Twig_DoctrineExtensionService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'enqueue.client.consume_command' => ['privates', 'enqueue.client.consume_command', 'getEnqueue_Client_ConsumeCommandService', false],
            'enqueue.client.default.client_extensions' => ['privates', 'enqueue.client.default.client_extensions', 'getEnqueue_Client_Default_ClientExtensionsService', false],
            'enqueue.client.default.config' => ['privates', 'enqueue.client.default.config', 'getEnqueue_Client_Default_ConfigService', false],
            'enqueue.client.default.consumption_extensions' => ['privates', 'enqueue.client.default.consumption_extensions', 'getEnqueue_Client_Default_ConsumptionExtensionsService', false],
            'enqueue.client.default.context' => ['privates', 'enqueue.client.default.context', 'getEnqueue_Client_Default_ContextService', false],
            'enqueue.client.default.delegate_processor' => ['privates', 'enqueue.client.default.delegate_processor', 'getEnqueue_Client_Default_DelegateProcessorService', false],
            'enqueue.client.default.driver' => ['privates', 'enqueue.client.default.driver', 'getEnqueue_Client_Default_DriverService', false],
            'enqueue.client.default.driver_factory' => ['privates', 'enqueue.client.default.driver_factory.outer', 'getEnqueue_Client_Default_DriverFactory_OuterService', false],
            'enqueue.client.default.driver_factory.inner' => ['privates', 'enqueue.client.default.driver_factory.inner', 'getEnqueue_Client_Default_DriverFactory_InnerService', false],
            'enqueue.client.default.driver_factory.outer' => ['privates', 'enqueue.client.default.driver_factory.outer', 'getEnqueue_Client_Default_DriverFactory_OuterService', false],
            'enqueue.client.default.exclusive_command_extension' => ['privates', 'enqueue.client.default.exclusive_command_extension', 'getEnqueue_Client_Default_ExclusiveCommandExtensionService', false],
            'enqueue.client.default.flush_spool_producer_extension' => ['privates', 'enqueue.client.default.flush_spool_producer_extension', 'getEnqueue_Client_Default_FlushSpoolProducerExtensionService', false],
            'enqueue.client.default.flush_spool_producer_listener' => ['privates', 'enqueue.client.default.flush_spool_producer_listener', 'getEnqueue_Client_Default_FlushSpoolProducerListenerService', false],
            'enqueue.client.default.lazy_producer' => ['privates', 'enqueue.client.default.lazy_producer', 'getEnqueue_Client_Default_LazyProducerService', false],
            'enqueue.client.default.processor_registry' => ['privates', 'enqueue.client.default.processor_registry', 'getEnqueue_Client_Default_ProcessorRegistryService', false],
            'enqueue.client.default.queue_consumer' => ['privates', 'enqueue.client.default.queue_consumer', 'getEnqueue_Client_Default_QueueConsumerService', false],
            'enqueue.client.default.route_collection' => ['privates', 'enqueue.client.default.route_collection', 'getEnqueue_Client_Default_RouteCollectionService', false],
            'enqueue.client.default.router_processor' => ['privates', 'enqueue.client.default.router_processor', 'getEnqueue_Client_Default_RouterProcessorService', false],
            'enqueue.client.default.rpc_factory' => ['privates', 'enqueue.client.default.rpc_factory', 'getEnqueue_Client_Default_RpcFactoryService', false],
            'enqueue.client.default.set_router_properties_extension' => ['privates', 'enqueue.client.default.set_router_properties_extension', 'getEnqueue_Client_Default_SetRouterPropertiesExtensionService', false],
            'enqueue.client.default.spool_producer' => ['privates', 'enqueue.client.default.spool_producer', 'getEnqueue_Client_Default_SpoolProducerService', false],
            'enqueue.client.default.traceable_producer' => ['services', 'enqueue.client.default.producer', 'getEnqueue_Client_Default_ProducerService', false],
            'enqueue.client.default.traceable_producer.inner' => ['privates', 'enqueue.client.default.traceable_producer.inner', 'getEnqueue_Client_Default_TraceableProducer_InnerService', false],
            'enqueue.client.produce_command' => ['privates', 'enqueue.client.produce_command', 'getEnqueue_Client_ProduceCommandService', false],
            'enqueue.client.routes_command' => ['privates', 'enqueue.client.routes_command', 'getEnqueue_Client_RoutesCommandService', false],
            'enqueue.client.setup_broker_command' => ['privates', 'enqueue.client.setup_broker_command', 'getEnqueue_Client_SetupBrokerCommandService', false],
            'enqueue.consumption.reply_extension' => ['privates', 'enqueue.consumption.reply_extension', 'getEnqueue_Consumption_ReplyExtensionService', false],
            'enqueue.locator' => ['privates', 'enqueue.locator', 'getEnqueue_LocatorService', false],
            'enqueue.messenger_transport.factory' => ['privates', 'enqueue.messenger_transport.factory', 'getEnqueue_MessengerTransport_FactoryService', false],
            'enqueue.profiler.message_queue_collector' => ['privates', 'enqueue.profiler.message_queue_collector', 'getEnqueue_Profiler_MessageQueueCollectorService', false],
            'enqueue.transport.consume_command' => ['privates', 'enqueue.transport.consume_command', 'getEnqueue_Transport_ConsumeCommandService', false],
            'enqueue.transport.default.connection_factory' => ['privates', 'enqueue.transport.default.connection_factory', 'getEnqueue_Transport_Default_ConnectionFactoryService', false],
            'enqueue.transport.default.connection_factory_factory' => ['privates', 'enqueue.transport.default.connection_factory_factory.outer', 'getEnqueue_Transport_Default_ConnectionFactoryFactory_OuterService', false],
            'enqueue.transport.default.connection_factory_factory.inner' => ['privates', 'enqueue.transport.default.connection_factory_factory.inner', 'getEnqueue_Transport_Default_ConnectionFactoryFactory_InnerService', false],
            'enqueue.transport.default.connection_factory_factory.outer' => ['privates', 'enqueue.transport.default.connection_factory_factory.outer', 'getEnqueue_Transport_Default_ConnectionFactoryFactory_OuterService', false],
            'enqueue.transport.default.consumption_extensions' => ['privates', 'enqueue.transport.default.consumption_extensions', 'getEnqueue_Transport_Default_ConsumptionExtensionsService', false],
            'enqueue.transport.default.context' => ['privates', 'enqueue.transport.default.context', 'getEnqueue_Transport_Default_ContextService', false],
            'enqueue.transport.default.log_extension' => ['privates', 'enqueue.transport.default.log_extension', 'getEnqueue_Transport_Default_LogExtensionService', false],
            'enqueue.transport.default.processor_registry' => ['privates', 'enqueue.transport.default.processor_registry', 'getEnqueue_Transport_Default_ProcessorRegistryService', false],
            'enqueue.transport.default.queue_consumer' => ['privates', 'enqueue.transport.default.queue_consumer', 'getEnqueue_Transport_Default_QueueConsumerService', false],
            'error_handler.error_renderer.html' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'error_handler.error_renderer.serializer' => ['privates', 'error_handler.error_renderer.serializer', 'getErrorHandler_ErrorRenderer_SerializerService', false],
            'error_renderer' => ['privates', 'error_handler.error_renderer.serializer', 'getErrorHandler_ErrorRenderer_SerializerService', false],
            'error_renderer.html' => ['privates', 'twig.error_renderer.html', 'getTwig_ErrorRenderer_HtmlService', false],
            'error_renderer.serializer' => ['privates', 'error_handler.error_renderer.serializer', 'getErrorHandler_ErrorRenderer_SerializerService', false],
            'exception_listener' => ['privates', 'exception_listener', 'getExceptionListener2Service', false],
            'file_locator' => ['privates', 'file_locator', 'getFileLocatorService', false],
            'form.choice_list_factory' => ['privates', 'form.choice_list_factory.cached', 'getForm_ChoiceListFactory_CachedService', false],
            'form.choice_list_factory.cached' => ['privates', 'form.choice_list_factory.cached', 'getForm_ChoiceListFactory_CachedService', false],
            'form.choice_list_factory.default' => ['privates', 'form.choice_list_factory.default', 'getForm_ChoiceListFactory_DefaultService', false],
            'form.choice_list_factory.property_access' => ['privates', 'form.choice_list_factory.property_access', 'getForm_ChoiceListFactory_PropertyAccessService', false],
            'form.extension' => ['privates', 'form.extension', 'getForm_ExtensionService', false],
            'form.property_accessor' => ['privates', 'property_accessor', 'getPropertyAccessorService', false],
            'form.registry' => ['privates', 'form.registry', 'getForm_RegistryService', false],
            'form.resolved_type_factory' => ['privates', 'form.resolved_type_factory', 'getForm_ResolvedTypeFactoryService', false],
            'form.server_params' => ['privates', 'form.server_params', 'getForm_ServerParamsService', false],
            'form.type.choice' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'form.type.entity' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'form.type.form' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
            'form.type_extension.csrf' => ['privates', 'form.type_extension.csrf', 'getForm_TypeExtension_CsrfService', false],
            'form.type_extension.form.data_collector' => ['privates', 'form.type_extension.form.data_collector', 'getForm_TypeExtension_Form_DataCollectorService', false],
            'form.type_extension.form.http_foundation' => ['privates', 'form.type_extension.form.http_foundation', 'getForm_TypeExtension_Form_HttpFoundationService', false],
            'form.type_extension.form.request_handler' => ['privates', 'form.type_extension.form.request_handler', 'getForm_TypeExtension_Form_RequestHandlerService', false],
            'form.type_extension.form.transformation_failure_handling' => ['privates', 'form.type_extension.form.transformation_failure_handling', 'getForm_TypeExtension_Form_TransformationFailureHandlingService', false],
            'form.type_extension.form.validator' => ['privates', 'form.type_extension.form.validator', 'getForm_TypeExtension_Form_ValidatorService', false],
            'form.type_extension.repeated.validator' => ['privates', 'form.type_extension.repeated.validator', 'getForm_TypeExtension_Repeated_ValidatorService', false],
            'form.type_extension.submit.validator' => ['privates', 'form.type_extension.submit.validator', 'getForm_TypeExtension_Submit_ValidatorService', false],
            'form.type_guesser.doctrine' => ['privates', 'form.type_guesser.doctrine', 'getForm_TypeGuesser_DoctrineService', false],
            'form.type_guesser.validator' => ['privates', 'form.type_guesser.validator', 'getForm_TypeGuesser_ValidatorService', false],
            'fragment.handler' => ['privates', 'fragment.handler', 'getFragment_HandlerService', false],
            'fragment.renderer.inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
            'framework_extra_bundle.argument_name_convertor' => ['privates', 'framework_extra_bundle.argument_name_convertor', 'getFrameworkExtraBundle_ArgumentNameConvertorService', false],
            'framework_extra_bundle.date_time_param_converter' => ['privates', 'framework_extra_bundle.date_time_param_converter', 'getFrameworkExtraBundle_DateTimeParamConverterService', false],
            'framework_extra_bundle.event.is_granted' => ['privates', 'framework_extra_bundle.event.is_granted', 'getFrameworkExtraBundle_Event_IsGrantedService', false],
            'http_client' => ['privates', '.debug.http_client', 'get_Debug_HttpClientService', false],
            'locale_listener' => ['privates', 'locale_listener', 'getLocaleListenerService', false],
            'logger' => ['privates', 'logger', 'getLoggerService', false],
            'mailer.data_collector' => ['privates', 'mailer.data_collector', 'getMailer_DataCollectorService', false],
            'mailer.envelope_listener' => ['privates', 'mailer.envelope_listener', 'getMailer_EnvelopeListenerService', false],
            'mailer.logger_message_listener' => ['privates', 'mailer.logger_message_listener', 'getMailer_LoggerMessageListenerService', false],
            'mailer.messenger.message_handler' => ['privates', 'mailer.messenger.message_handler', 'getMailer_Messenger_MessageHandlerService', false],
            'mailer.transport_factory' => ['privates', 'mailer.transport_factory', 'getMailer_TransportFactoryService', false],
            'mailer.transport_factory.null' => ['privates', 'mailer.transport_factory.null', 'getMailer_TransportFactory_NullService', false],
            'mailer.transport_factory.sendmail' => ['privates', 'mailer.transport_factory.sendmail', 'getMailer_TransportFactory_SendmailService', false],
            'mailer.transport_factory.smtp' => ['privates', 'mailer.transport_factory.smtp', 'getMailer_TransportFactory_SmtpService', false],
            'mailer.transports' => ['privates', 'mailer.transports', 'getMailer_TransportsService', false],
            'messenger.bus.default' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
            'messenger.bus.default.messenger.handlers_locator' => ['privates', 'messenger.bus.default.messenger.handlers_locator', 'getMessenger_Bus_Default_Messenger_HandlersLocatorService', false],
            'messenger.bus.default.middleware.add_bus_name_stamp_middleware' => ['privates', 'messenger.bus.default.middleware.add_bus_name_stamp_middleware', 'getMessenger_Bus_Default_Middleware_AddBusNameStampMiddlewareService', false],
            'messenger.bus.default.middleware.handle_message' => ['privates', 'messenger.bus.default.middleware.handle_message', 'getMessenger_Bus_Default_Middleware_HandleMessageService', false],
            'messenger.bus.default.middleware.traceable' => ['privates', 'messenger.bus.default.middleware.traceable', 'getMessenger_Bus_Default_Middleware_TraceableService', false],
            'messenger.default_serializer' => ['privates', 'messenger.transport.native_php_serializer', 'getMessenger_Transport_NativePhpSerializerService', false],
            'messenger.failure.send_failed_message_to_failure_transport_listener' => ['privates', 'messenger.failure.send_failed_message_to_failure_transport_listener', 'getMessenger_Failure_SendFailedMessageToFailureTransportListenerService', false],
            'messenger.listener.stop_worker_on_restart_signal_listener' => ['privates', 'messenger.listener.stop_worker_on_restart_signal_listener', 'getMessenger_Listener_StopWorkerOnRestartSignalListenerService', false],
            'messenger.middleware.dispatch_after_current_bus' => ['privates', 'messenger.middleware.dispatch_after_current_bus', 'getMessenger_Middleware_DispatchAfterCurrentBusService', false],
            'messenger.middleware.failed_message_processing_middleware' => ['privates', 'messenger.middleware.failed_message_processing_middleware', 'getMessenger_Middleware_FailedMessageProcessingMiddlewareService', false],
            'messenger.middleware.reject_redelivered_message_middleware' => ['privates', 'messenger.middleware.reject_redelivered_message_middleware', 'getMessenger_Middleware_RejectRedeliveredMessageMiddlewareService', false],
            'messenger.middleware.send_message' => ['privates', 'messenger.middleware.send_message', 'getMessenger_Middleware_SendMessageService', false],
            'messenger.receiver_locator' => ['privates', 'messenger.receiver_locator', 'getMessenger_ReceiverLocatorService', false],
            'messenger.retry.multiplier_retry_strategy.failed' => ['privates', 'messenger.retry.multiplier_retry_strategy.failed', 'getMessenger_Retry_MultiplierRetryStrategy_FailedService', false],
            'messenger.retry.multiplier_retry_strategy.mailer' => ['privates', 'messenger.retry.multiplier_retry_strategy.mailer', 'getMessenger_Retry_MultiplierRetryStrategy_MailerService', false],
            'messenger.retry.send_failed_message_for_retry_listener' => ['privates', 'messenger.retry.send_failed_message_for_retry_listener', 'getMessenger_Retry_SendFailedMessageForRetryListenerService', false],
            'messenger.retry_strategy_locator' => ['privates', 'messenger.retry_strategy_locator', 'getMessenger_RetryStrategyLocatorService', false],
            'messenger.routable_message_bus' => ['privates', 'messenger.routable_message_bus', 'getMessenger_RoutableMessageBusService', false],
            'messenger.senders_locator' => ['privates', 'messenger.senders_locator', 'getMessenger_SendersLocatorService', false],
            'messenger.transport.amqp.factory' => ['privates', 'messenger.transport.amqp.factory', 'getMessenger_Transport_Amqp_FactoryService', false],
            'messenger.transport.doctrine.factory' => ['privates', 'messenger.transport.doctrine.factory', 'getMessenger_Transport_Doctrine_FactoryService', false],
            'messenger.transport.failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', false],
            'messenger.transport.in_memory.factory' => ['privates', 'messenger.transport.in_memory.factory', 'getMessenger_Transport_InMemory_FactoryService', false],
            'messenger.transport.mailer' => ['privates', 'messenger.transport.mailer', 'getMessenger_Transport_MailerService', false],
            'messenger.transport.native_php_serializer' => ['privates', 'messenger.transport.native_php_serializer', 'getMessenger_Transport_NativePhpSerializerService', false],
            'messenger.transport.redis.factory' => ['privates', 'messenger.transport.redis.factory', 'getMessenger_Transport_Redis_FactoryService', false],
            'messenger.transport.sync.factory' => ['privates', 'messenger.transport.sync.factory', 'getMessenger_Transport_Sync_FactoryService', false],
            'messenger.transport_factory' => ['privates', 'messenger.transport_factory', 'getMessenger_TransportFactoryService', false],
            'mime_types' => ['privates', 'mime_types', 'getMimeTypesService', false],
            'notifier.transport_factory.null' => ['privates', 'notifier.transport_factory.null', 'getNotifier_TransportFactory_NullService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'profiler.storage' => ['privates', 'profiler.storage', 'getProfiler_StorageService', false],
            'profiler_listener' => ['privates', 'profiler_listener', 'getProfilerListenerService', false],
            'property_accessor' => ['privates', 'property_accessor', 'getPropertyAccessorService', false],
            'property_info' => ['privates', 'property_info', 'getPropertyInfoService', false],
            'property_info.php_doc_extractor' => ['privates', 'property_info.php_doc_extractor', 'getPropertyInfo_PhpDocExtractorService', false],
            'property_info.reflection_extractor' => ['privates', 'property_info.reflection_extractor', 'getPropertyInfo_ReflectionExtractorService', false],
            'property_info.serializer_extractor' => ['privates', 'property_info.serializer_extractor', 'getPropertyInfo_SerializerExtractorService', false],
            'response_listener' => ['privates', 'response_listener', 'getResponseListenerService', false],
            'router.cache_warmer' => ['privates', 'router.cache_warmer', 'getRouter_CacheWarmerService', false],
            'router.default' => ['services', 'router', 'getRouterService', false],
            'router.request_context' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
            'router_listener' => ['privates', 'router_listener', 'getRouterListenerService', false],
            'routing.loader.annotation' => ['privates', 'routing.loader.annotation', 'getRouting_Loader_AnnotationService', false],
            'routing.loader.annotation.directory' => ['privates', 'routing.loader.annotation.directory', 'getRouting_Loader_Annotation_DirectoryService', false],
            'routing.loader.annotation.file' => ['privates', 'routing.loader.annotation.file', 'getRouting_Loader_Annotation_FileService', false],
            'routing.loader.container' => ['privates', 'routing.loader.container', 'getRouting_Loader_ContainerService', false],
            'routing.loader.directory' => ['privates', 'routing.loader.directory', 'getRouting_Loader_DirectoryService', false],
            'routing.loader.glob' => ['privates', 'routing.loader.glob', 'getRouting_Loader_GlobService', false],
            'routing.loader.php' => ['privates', 'routing.loader.php', 'getRouting_Loader_PhpService', false],
            'routing.loader.xml' => ['privates', 'routing.loader.xml', 'getRouting_Loader_XmlService', false],
            'routing.loader.yml' => ['privates', 'routing.loader.yml', 'getRouting_Loader_YmlService', false],
            'routing.resolver' => ['privates', 'routing.resolver', 'getRouting_ResolverService', false],
            'secrets.local_vault' => ['privates', 'secrets.local_vault', 'getSecrets_LocalVaultService', false],
            'secrets.vault' => ['privates', 'secrets.vault', 'getSecrets_VaultService', false],
            'security.access.authenticated_voter' => ['privates', 'security.access.authenticated_voter', 'getSecurity_Access_AuthenticatedVoterService', false],
            'security.access.decision_manager' => ['privates', 'debug.security.access.decision_manager', 'getDebug_Security_Access_DecisionManagerService', false],
            'security.access.simple_role_voter' => ['privates', 'security.access.simple_role_voter', 'getSecurity_Access_SimpleRoleVoterService', false],
            'security.access_listener' => ['privates', 'security.access_listener', 'getSecurity_AccessListenerService', false],
            'security.access_map' => ['privates', 'security.access_map', 'getSecurity_AccessMapService', false],
            'security.authentication.guard_handler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', false],
            'security.authentication.listener.anonymous.main' => ['privates', 'security.authentication.listener.anonymous.main', 'getSecurity_Authentication_Listener_Anonymous_MainService', false],
            'security.authentication.listener.guard.main' => ['privates', 'security.authentication.listener.guard.main', 'getSecurity_Authentication_Listener_Guard_MainService', false],
            'security.authentication.manager' => ['privates', 'security.authentication.manager', 'getSecurity_Authentication_ManagerService', false],
            'security.authentication.provider.anonymous.main' => ['privates', 'security.authentication.provider.anonymous.main', 'getSecurity_Authentication_Provider_Anonymous_MainService', false],
            'security.authentication.provider.guard.main' => ['privates', 'security.authentication.provider.guard.main', 'getSecurity_Authentication_Provider_Guard_MainService', false],
            'security.authentication.retry_entry_point' => ['privates', 'security.authentication.retry_entry_point', 'getSecurity_Authentication_RetryEntryPointService', false],
            'security.authentication.session_strategy' => ['privates', 'security.authentication.session_strategy', 'getSecurity_Authentication_SessionStrategyService', false],
            'security.authentication.session_strategy.main' => ['privates', 'security.authentication.session_strategy', 'getSecurity_Authentication_SessionStrategyService', false],
            'security.authentication.trust_resolver' => ['privates', 'security.authentication.trust_resolver', 'getSecurity_Authentication_TrustResolverService', false],
            'security.channel_listener' => ['privates', 'security.channel_listener', 'getSecurity_ChannelListenerService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'security.context_listener.0' => ['privates', 'security.context_listener.0', 'getSecurity_ContextListener_0Service', false],
            'security.csrf.token_generator' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', false],
            'security.csrf.token_storage' => ['privates', 'security.csrf.token_storage', 'getSecurity_Csrf_TokenStorageService', false],
            'security.encoder_factory' => ['privates', 'security.encoder_factory.generic', 'getSecurity_EncoderFactory_GenericService', false],
            'security.encoder_factory.generic' => ['privates', 'security.encoder_factory.generic', 'getSecurity_EncoderFactory_GenericService', false],
            'security.exception_listener.main' => ['privates', 'security.exception_listener.main', 'getSecurity_ExceptionListener_MainService', false],
            'security.firewall' => ['privates', 'debug.security.firewall', 'getDebug_Security_FirewallService', false],
            'security.firewall.map' => ['privates', 'security.firewall.map', 'getSecurity_Firewall_MapService', false],
            'security.firewall.map.config.dev' => ['privates', 'security.firewall.map.config.dev', 'getSecurity_Firewall_Map_Config_DevService', false],
            'security.firewall.map.config.main' => ['privates', 'security.firewall.map.config.main', 'getSecurity_Firewall_Map_Config_MainService', false],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
            'security.http_utils' => ['privates', 'security.http_utils', 'getSecurity_HttpUtilsService', false],
            'security.logout.handler.csrf_token_clearing' => ['privates', 'security.logout.handler.csrf_token_clearing', 'getSecurity_Logout_Handler_CsrfTokenClearingService', false],
            'security.logout.handler.session' => ['privates', 'security.logout.handler.session', 'getSecurity_Logout_Handler_SessionService', false],
            'security.logout.success_handler.main' => ['privates', 'security.logout.success_handler.main', 'getSecurity_Logout_SuccessHandler_MainService', false],
            'security.logout_listener.main' => ['privates', 'security.logout_listener.main', 'getSecurity_LogoutListener_MainService', false],
            'security.logout_url_generator' => ['privates', 'security.logout_url_generator', 'getSecurity_LogoutUrlGeneratorService', false],
            'security.rememberme.response_listener' => ['privates', 'security.rememberme.response_listener', 'getSecurity_Rememberme_ResponseListenerService', false],
            'security.role_hierarchy' => ['privates', 'security.role_hierarchy', 'getSecurity_RoleHierarchyService', false],
            'security.untracked_token_storage' => ['privates', 'security.untracked_token_storage', 'getSecurity_UntrackedTokenStorageService', false],
            'security.user.provider.concrete.user_provider' => ['privates', 'App\\Infrastructure\\Security\\Provider\\UserProvider', 'getUserProviderService', false],
            'security.user_checker' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'security.user_checker.main' => ['privates', 'security.user_checker', 'getSecurity_UserCheckerService', false],
            'security.user_password_encoder.generic' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', false],
            'security.user_value_resolver' => ['privates', 'debug.security.user_value_resolver', 'getDebug_Security_UserValueResolverService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'sensio_framework_extra.cache.listener' => ['privates', 'sensio_framework_extra.cache.listener', 'getSensioFrameworkExtra_Cache_ListenerService', false],
            'sensio_framework_extra.controller.listener' => ['privates', 'sensio_framework_extra.controller.listener', 'getSensioFrameworkExtra_Controller_ListenerService', false],
            'sensio_framework_extra.converter.doctrine.orm' => ['privates', 'sensio_framework_extra.converter.doctrine.orm', 'getSensioFrameworkExtra_Converter_Doctrine_OrmService', false],
            'sensio_framework_extra.converter.listener' => ['privates', 'sensio_framework_extra.converter.listener', 'getSensioFrameworkExtra_Converter_ListenerService', false],
            'sensio_framework_extra.converter.manager' => ['privates', 'sensio_framework_extra.converter.manager', 'getSensioFrameworkExtra_Converter_ManagerService', false],
            'sensio_framework_extra.security.listener' => ['privates', 'sensio_framework_extra.security.listener', 'getSensioFrameworkExtra_Security_ListenerService', false],
            'sensio_framework_extra.view.guesser' => ['privates', 'sensio_framework_extra.view.guesser', 'getSensioFrameworkExtra_View_GuesserService', false],
            'sensio_framework_extra.view.listener' => ['privates', 'sensio_framework_extra.view.listener', 'getSensioFrameworkExtra_View_ListenerService', false],
            'serializer.denormalizer.array' => ['privates', 'serializer.denormalizer.array', 'getSerializer_Denormalizer_ArrayService', false],
            'serializer.encoder.csv' => ['privates', 'serializer.encoder.csv', 'getSerializer_Encoder_CsvService', false],
            'serializer.encoder.json' => ['privates', 'serializer.encoder.json', 'getSerializer_Encoder_JsonService', false],
            'serializer.encoder.xml' => ['privates', 'serializer.encoder.xml', 'getSerializer_Encoder_XmlService', false],
            'serializer.encoder.yaml' => ['privates', 'serializer.encoder.yaml', 'getSerializer_Encoder_YamlService', false],
            'serializer.mapping.cache_warmer' => ['privates', 'serializer.mapping.cache_warmer', 'getSerializer_Mapping_CacheWarmerService', false],
            'serializer.mapping.chain_loader' => ['privates', 'serializer.mapping.chain_loader', 'getSerializer_Mapping_ChainLoaderService', false],
            'serializer.mapping.class_discriminator_resolver' => ['privates', 'serializer.mapping.class_discriminator_resolver', 'getSerializer_Mapping_ClassDiscriminatorResolverService', false],
            'serializer.mapping.class_metadata_factory' => ['privates', 'serializer.mapping.class_metadata_factory', 'getSerializer_Mapping_ClassMetadataFactoryService', false],
            'serializer.name_converter.metadata_aware' => ['privates', 'serializer.name_converter.metadata_aware', 'getSerializer_NameConverter_MetadataAwareService', false],
            'serializer.normalizer.constraint_violation_list' => ['privates', 'serializer.normalizer.constraint_violation_list', 'getSerializer_Normalizer_ConstraintViolationListService', false],
            'serializer.normalizer.data_uri' => ['privates', 'serializer.normalizer.data_uri', 'getSerializer_Normalizer_DataUriService', false],
            'serializer.normalizer.dateinterval' => ['privates', 'serializer.normalizer.dateinterval', 'getSerializer_Normalizer_DateintervalService', false],
            'serializer.normalizer.datetime' => ['privates', 'serializer.normalizer.datetime', 'getSerializer_Normalizer_DatetimeService', false],
            'serializer.normalizer.datetimezone' => ['privates', 'serializer.normalizer.datetimezone', 'getSerializer_Normalizer_DatetimezoneService', false],
            'serializer.normalizer.json_serializable' => ['privates', 'serializer.normalizer.json_serializable', 'getSerializer_Normalizer_JsonSerializableService', false],
            'serializer.normalizer.object' => ['privates', 'serializer.normalizer.object', 'getSerializer_Normalizer_ObjectService', false],
            'serializer.normalizer.problem' => ['privates', 'serializer.normalizer.problem', 'getSerializer_Normalizer_ProblemService', false],
            'serializer.property_accessor' => ['privates', 'property_accessor', 'getPropertyAccessorService', false],
            'session.flash_bag' => ['privates', 'session.flash_bag', 'getSession_FlashBagService', false],
            'session.storage' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session.storage.filesystem' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session.storage.metadata_bag' => ['privates', 'session.storage.metadata_bag', 'getSession_Storage_MetadataBagService', false],
            'session.storage.mock_file' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
            'session_listener' => ['privates', 'session_listener', 'getSessionListenerService', false],
            'streamed_response_listener' => ['privates', 'streamed_response_listener', 'getStreamedResponseListenerService', false],
            'test.client.cookiejar' => [false, 'test.client.cookiejar', 'getTest_Client_CookiejarService', false],
            'test.client.history' => [false, 'test.client.history', 'getTest_Client_HistoryService', false],
            'test.session.listener' => ['privates', 'test.session.listener', 'getTest_Session_ListenerService', false],
            'texter.messenger.sms_handler' => ['privates', 'texter.messenger.sms_handler', 'getTexter_Messenger_SmsHandlerService', false],
            'texter.transport_factory' => ['privates', 'texter.transport_factory', 'getTexter_TransportFactoryService', false],
            'texter.transports' => ['privates', 'texter.transports', 'getTexter_TransportsService', false],
            'twig.app_variable' => ['privates', 'twig.app_variable', 'getTwig_AppVariableService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'twig.configurator.environment' => ['privates', 'twig.configurator.environment', 'getTwig_Configurator_EnvironmentService', false],
            'twig.error_renderer.html' => ['privates', 'twig.error_renderer.html', 'getTwig_ErrorRenderer_HtmlService', false],
            'twig.error_renderer.html.inner' => ['privates', 'error_handler.error_renderer.html', 'getErrorHandler_ErrorRenderer_HtmlService', false],
            'twig.extension.code' => ['privates', 'twig.extension.code', 'getTwig_Extension_CodeService', false],
            'twig.extension.cssinliner' => ['privates', 'twig.extension.cssinliner', 'getTwig_Extension_CssinlinerService', false],
            'twig.extension.debug' => ['privates', 'twig.extension.debug', 'getTwig_Extension_DebugService', false],
            'twig.extension.debug.stopwatch' => ['privates', 'twig.extension.debug.stopwatch', 'getTwig_Extension_Debug_StopwatchService', false],
            'twig.extension.form' => ['privates', 'twig.extension.form', 'getTwig_Extension_FormService', false],
            'twig.extension.httpfoundation' => ['privates', 'twig.extension.httpfoundation', 'getTwig_Extension_HttpfoundationService', false],
            'twig.extension.httpkernel' => ['privates', 'twig.extension.httpkernel', 'getTwig_Extension_HttpkernelService', false],
            'twig.extension.inky' => ['privates', 'twig.extension.inky', 'getTwig_Extension_InkyService', false],
            'twig.extension.logout_url' => ['privates', 'twig.extension.logout_url', 'getTwig_Extension_LogoutUrlService', false],
            'twig.extension.profiler' => ['privates', 'twig.extension.profiler', 'getTwig_Extension_ProfilerService', false],
            'twig.extension.routing' => ['privates', 'twig.extension.routing', 'getTwig_Extension_RoutingService', false],
            'twig.extension.security' => ['privates', 'twig.extension.security', 'getTwig_Extension_SecurityService', false],
            'twig.extension.security_csrf' => ['privates', 'twig.extension.security_csrf', 'getTwig_Extension_SecurityCsrfService', false],
            'twig.extension.trans' => ['privates', 'twig.extension.trans', 'getTwig_Extension_TransService', false],
            'twig.extension.webprofiler' => ['privates', 'twig.extension.webprofiler', 'getTwig_Extension_WebprofilerService', false],
            'twig.extension.yaml' => ['privates', 'twig.extension.yaml', 'getTwig_Extension_YamlService', false],
            'twig.form.engine' => ['privates', 'twig.form.engine', 'getTwig_Form_EngineService', false],
            'twig.form.renderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
            'twig.loader' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.loader.filesystem' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.loader.native_filesystem' => ['privates', 'twig.loader.native_filesystem', 'getTwig_Loader_NativeFilesystemService', false],
            'twig.mailer.message_listener' => ['privates', 'twig.mailer.message_listener', 'getTwig_Mailer_MessageListenerService', false],
            'twig.mime_body_renderer' => ['privates', 'twig.mime_body_renderer', 'getTwig_MimeBodyRendererService', false],
            'twig.missing_extension_suggestor' => ['privates', 'twig.missing_extension_suggestor', 'getTwig_MissingExtensionSuggestorService', false],
            'twig.profile' => ['privates', 'twig.profile', 'getTwig_ProfileService', false],
            'twig.runtime.httpkernel' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'twig.runtime.security_csrf' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'twig.runtime_loader' => ['privates', 'twig.runtime_loader', 'getTwig_RuntimeLoaderService', false],
            'twig.template_cache_warmer' => ['privates', 'twig.template_cache_warmer', 'getTwig_TemplateCacheWarmerService', false],
            'twig.template_iterator' => ['privates', 'twig.template_iterator', 'getTwig_TemplateIteratorService', false],
            'url_helper' => ['privates', 'url_helper', 'getUrlHelperService', false],
            'validate_request_listener' => ['privates', 'validate_request_listener', 'getValidateRequestListenerService', false],
            'validator.builder' => ['privates', 'validator.builder', 'getValidator_BuilderService', false],
            'validator.email' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'validator.mapping.cache_warmer' => ['privates', 'validator.mapping.cache_warmer', 'getValidator_Mapping_CacheWarmerService', false],
            'validator.mapping.class_metadata_factory' => ['services', 'validator', 'getValidatorService', false],
            'validator.not_compromised_password' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'validator.property_info_loader' => ['privates', 'validator.property_info_loader', 'getValidator_PropertyInfoLoaderService', false],
            'validator.validator_factory' => ['privates', 'validator.validator_factory', 'getValidator_ValidatorFactoryService', false],
            'web_profiler.csp.handler' => ['privates', 'web_profiler.csp.handler', 'getWebProfiler_Csp_HandlerService', false],
        ], [
            'App\\Infrastructure\\Adapter\\Provider\\MailProvider' => '?',
            'App\\Infrastructure\\Adapter\\Repository\\ArticleRepository' => '?',
            'App\\Infrastructure\\Adapter\\Repository\\CategoryRepository' => '?',
            'App\\Infrastructure\\Adapter\\Repository\\RoleRepository' => '?',
            'App\\Infrastructure\\Adapter\\Repository\\UserRepository' => '?',
            'App\\Infrastructure\\Doctrine\\DataFixtures\\ArticleFixtures' => '?',
            'App\\Infrastructure\\Doctrine\\DataFixtures\\UserFixtures' => '?',
            'App\\Infrastructure\\EventListener\\ExceptionListener' => '?',
            'App\\Infrastructure\\ParamConverter\\ArticleConverter' => '?',
            'App\\Infrastructure\\ParamConverter\\CategoryConverter' => '?',
            'App\\Infrastructure\\Security\\Guard\\WebAuthenticator' => '?',
            'App\\Infrastructure\\Security\\Provider\\UserProvider' => '?',
            'App\\Infrastructure\\Validator\\NonUniqueEmailValidator' => '?',
            'App\\Infrastructure\\Validator\\NonUniquePseudoValidator' => '?',
            'App\\UserInterface\\Form\\ArticleType' => '?',
            'App\\UserInterface\\Form\\CategoryType' => '?',
            'App\\UserInterface\\Form\\RecoverPasswordType' => '?',
            'App\\UserInterface\\Form\\RegistrationType' => '?',
            'App\\UserInterface\\Form\\ResetPasswordType' => '?',
            'App\\UserInterface\\Form\\RoleType' => '?',
            'App\\UserInterface\\Presenter\\Article\\CreatePresenter' => '?',
            'App\\UserInterface\\Presenter\\Article\\RemovePresenter' => '?',
            'App\\UserInterface\\Presenter\\Article\\UpdatePresenter' => '?',
            'App\\UserInterface\\Presenter\\Category\\CreatePresenter' => '?',
            'App\\UserInterface\\Presenter\\Category\\RemovePresenter' => '?',
            'App\\UserInterface\\Presenter\\Category\\UpdatePresenter' => '?',
            'App\\UserInterface\\Presenter\\RegistrationPresenter' => '?',
            'App\\UserInterface\\Presenter\\Security\\AskPasswordResetPresenter' => '?',
            'App\\UserInterface\\Presenter\\Security\\RecoverPasswordPresenter' => '?',
            'App\\UserInterface\\Presenter\\Security\\Role\\CreatePresenter' => '?',
            'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider' => '?',
            'Doctrine\\Common\\Annotations\\Reader' => '?',
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => '?',
            'Doctrine\\DBAL\\Connection' => '?',
            'Doctrine\\DBAL\\Driver\\Connection' => '?',
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => '?',
            'Doctrine\\ORM\\EntityManagerInterface' => '?',
            'Doctrine\\Persistence\\ManagerRegistry' => '?',
            'Enqueue\\Client\\DriverInterface' => '?',
            'Enqueue\\Client\\ProducerInterface' => '?',
            'Enqueue\\Client\\SpoolProducer' => '?',
            'Enqueue\\Consumption\\QueueConsumerInterface' => '?',
            'Interop\\Queue\\ConnectionFactory' => '?',
            'Interop\\Queue\\Context' => '?',
            'Psr\\Cache\\CacheItemPoolInterface' => '?',
            'Psr\\Container\\ContainerInterface' => '?',
            'Psr\\Container\\ContainerInterface $parameterBag' => '?',
            'Psr\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Psr\\Log\\LoggerInterface' => '?',
            'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => '?',
            'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Component\\Filesystem\\Filesystem' => '?',
            'Symfony\\Component\\Form\\FormFactoryInterface' => '?',
            'Symfony\\Component\\Form\\FormRegistryInterface' => '?',
            'Symfony\\Component\\Form\\ResolvedFormTypeFactoryInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\RequestStack' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => '?',
            'Symfony\\Component\\HttpFoundation\\UrlHelper' => '?',
            'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => '?',
            'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => '?',
            'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => '?',
            'Symfony\\Component\\HttpKernel\\KernelInterface' => '?',
            'Symfony\\Component\\Messenger\\MessageBusInterface' => '?',
            'Symfony\\Component\\Messenger\\Transport\\Serialization\\SerializerInterface' => '?',
            'Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface' => '?',
            'Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface' => '?',
            'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => '?',
            'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => '?',
            'Symfony\\Component\\Routing\\RequestContext' => '?',
            'Symfony\\Component\\Routing\\RequestContextAwareInterface' => '?',
            'Symfony\\Component\\Routing\\RouterInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationManagerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManagerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactoryInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface' => '?',
            'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchyInterface' => '?',
            'Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface' => '?',
            'Symfony\\Component\\Security\\Core\\User\\UserProviderInterface' => '?',
            'Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface' => '?',
            'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface' => '?',
            'Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface' => '?',
            'Symfony\\Component\\Security\\Guard\\GuardAuthenticatorHandler' => '?',
            'Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils' => '?',
            'Symfony\\Component\\Security\\Http\\Firewall' => '?',
            'Symfony\\Component\\Security\\Http\\HttpUtils' => '?',
            'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface' => '?',
            'Symfony\\Component\\Serializer\\Encoder\\DecoderInterface' => '?',
            'Symfony\\Component\\Serializer\\Encoder\\EncoderInterface' => '?',
            'Symfony\\Component\\Serializer\\Mapping\\ClassDiscriminatorResolverInterface' => '?',
            'Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface' => '?',
            'Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface' => '?',
            'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface' => '?',
            'Symfony\\Component\\Serializer\\Normalizer\\ObjectNormalizer' => '?',
            'Symfony\\Component\\Serializer\\SerializerInterface' => '?',
            'Symfony\\Component\\Stopwatch\\Stopwatch' => '?',
            'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => '?',
            'Symfony\\Contracts\\Cache\\CacheInterface' => '?',
            'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => '?',
            'Symfony\\Contracts\\HttpClient\\HttpClientInterface' => '?',
            'TYannis\\SDS\\Domain\\Blog\\Gateway\\ArticleGateway' => '?',
            'TYannis\\SDS\\Domain\\Blog\\Gateway\\CategoryGateway' => '?',
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Article\\CreatePresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Article\\RemovePresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Article\\UpdatePresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Category\\CreatePresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Category\\RemovePresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Blog\\Presenter\\Category\\UpdatePresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Listing' => '?',
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Remove' => '?',
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Update' => '?',
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Create' => '?',
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Listing' => '?',
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Remove' => '?',
            'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Update' => '?',
            'TYannis\\SDS\\Domain\\Security\\Gateway\\RoleGateway' => '?',
            'TYannis\\SDS\\Domain\\Security\\Gateway\\UserGateway' => '?',
            'TYannis\\SDS\\Domain\\Security\\Presenter\\AskPasswordResetPresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Security\\Presenter\\LoginPresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Security\\Presenter\\RecoverPasswordPresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Security\\Presenter\\RegistrationPresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Security\\Presenter\\Role\\CreatePresenterInterface' => '?',
            'TYannis\\SDS\\Domain\\Security\\Provider\\MailProviderInterface' => '?',
            'TYannis\\SDS\\Domain\\Security\\UseCase\\AskPasswordReset' => '?',
            'TYannis\\SDS\\Domain\\Security\\UseCase\\Login' => '?',
            'TYannis\\SDS\\Domain\\Security\\UseCase\\RecoverPassword' => '?',
            'TYannis\\SDS\\Domain\\Security\\UseCase\\Registration' => '?',
            'TYannis\\SDS\\Domain\\Security\\UseCase\\Role\\Create' => '?',
            'TYannis\\SDS\\Domain\\Security\\UseCase\\User\\Listing' => '?',
            'Twig\\Environment' => '?',
            'Twig_Environment' => '?',
            'annotation_reader' => '?',
            'annotations.cache' => '?',
            'annotations.cache_warmer' => '?',
            'annotations.cached_reader' => '?',
            'annotations.dummy_registry' => '?',
            'annotations.reader' => '?',
            'argument_metadata_factory' => '?',
            'argument_resolver' => '?',
            'argument_resolver.controller_locator' => '?',
            'argument_resolver.default' => '?',
            'argument_resolver.not_tagged_controller' => '?',
            'argument_resolver.request' => '?',
            'argument_resolver.request_attribute' => '?',
            'argument_resolver.service' => '?',
            'argument_resolver.session' => '?',
            'argument_resolver.variadic' => '?',
            'cache.annotations' => '?',
            'cache.annotations.recorder_inner' => '?',
            'cache.app.recorder_inner' => '?',
            'cache.default_clearer' => '?',
            'cache.default_marshaller' => '?',
            'cache.default_pdo_provider' => '?',
            'cache.doctrine.orm.default.metadata' => '?',
            'cache.doctrine.orm.default.metadata.recorder_inner' => '?',
            'cache.doctrine.orm.default.query' => '?',
            'cache.doctrine.orm.default.query.recorder_inner' => '?',
            'cache.doctrine.orm.default.result' => '?',
            'cache.doctrine.orm.default.result.recorder_inner' => '?',
            'cache.messenger.restart_workers_signal' => '?',
            'cache.messenger.restart_workers_signal.recorder_inner' => '?',
            'cache.property_access' => '?',
            'cache.property_info' => '?',
            'cache.property_info.recorder_inner' => '?',
            'cache.security_expression_language' => '?',
            'cache.security_expression_language.recorder_inner' => '?',
            'cache.serializer' => '?',
            'cache.serializer.recorder_inner' => '?',
            'cache.system.recorder_inner' => '?',
            'cache.validator' => '?',
            'cache.validator.recorder_inner' => '?',
            'chatter.messenger.chat_handler' => '?',
            'chatter.transport_factory' => '?',
            'chatter.transports' => '?',
            'config.resource.self_checking_resource_checker' => '?',
            'config_cache_factory' => '?',
            'console.command.about' => '?',
            'console.command.assets_install' => '?',
            'console.command.cache_clear' => '?',
            'console.command.cache_pool_clear' => '?',
            'console.command.cache_pool_delete' => '?',
            'console.command.cache_pool_list' => '?',
            'console.command.cache_pool_prune' => '?',
            'console.command.cache_warmup' => '?',
            'console.command.config_debug' => '?',
            'console.command.config_dump_reference' => '?',
            'console.command.container_debug' => '?',
            'console.command.container_lint' => '?',
            'console.command.debug_autowiring' => '?',
            'console.command.event_dispatcher_debug' => '?',
            'console.command.form_debug' => '?',
            'console.command.messenger_consume_messages' => '?',
            'console.command.messenger_debug' => '?',
            'console.command.messenger_failed_messages_remove' => '?',
            'console.command.messenger_failed_messages_retry' => '?',
            'console.command.messenger_failed_messages_show' => '?',
            'console.command.messenger_setup_transports' => '?',
            'console.command.messenger_stop_workers' => '?',
            'console.command.router_debug' => '?',
            'console.command.router_match' => '?',
            'console.command.secrets_decrypt_to_local' => '?',
            'console.command.secrets_encrypt_from_local' => '?',
            'console.command.secrets_generate_key' => '?',
            'console.command.secrets_list' => '?',
            'console.command.secrets_remove' => '?',
            'console.command.secrets_set' => '?',
            'console.command.yaml_lint' => '?',
            'console.error_listener' => '?',
            'console.suggest_missing_package_subscriber' => '?',
            'container.env_var_processor' => '?',
            'controller_resolver' => '?',
            'dama.doctrine.dbal.connection_factory' => '?',
            'dama.doctrine.dbal.connection_factory.inner' => '?',
            'data_collector.ajax' => '?',
            'data_collector.cache' => '?',
            'data_collector.config' => '?',
            'data_collector.doctrine' => '?',
            'data_collector.events' => '?',
            'data_collector.exception' => '?',
            'data_collector.form' => '?',
            'data_collector.form.extractor' => '?',
            'data_collector.http_client' => '?',
            'data_collector.logger' => '?',
            'data_collector.memory' => '?',
            'data_collector.messenger' => '?',
            'data_collector.request' => '?',
            'data_collector.router' => '?',
            'data_collector.security' => '?',
            'data_collector.time' => '?',
            'data_collector.twig' => '?',
            'data_collector.validator' => '?',
            'debug.argument_resolver' => '?',
            'debug.argument_resolver.default' => '?',
            'debug.argument_resolver.default.inner' => '?',
            'debug.argument_resolver.inner' => '?',
            'debug.argument_resolver.not_tagged_controller' => '?',
            'debug.argument_resolver.not_tagged_controller.inner' => '?',
            'debug.argument_resolver.request' => '?',
            'debug.argument_resolver.request.inner' => '?',
            'debug.argument_resolver.request_attribute' => '?',
            'debug.argument_resolver.request_attribute.inner' => '?',
            'debug.argument_resolver.service' => '?',
            'debug.argument_resolver.service.inner' => '?',
            'debug.argument_resolver.session' => '?',
            'debug.argument_resolver.session.inner' => '?',
            'debug.argument_resolver.variadic' => '?',
            'debug.argument_resolver.variadic.inner' => '?',
            'debug.controller_resolver' => '?',
            'debug.controller_resolver.inner' => '?',
            'debug.debug_handlers_listener' => '?',
            'debug.event_dispatcher' => '?',
            'debug.event_dispatcher.inner' => '?',
            'debug.file_link_formatter' => '?',
            'debug.file_link_formatter.url_format' => '?',
            'debug.security.access.decision_manager' => '?',
            'debug.security.access.decision_manager.inner' => '?',
            'debug.security.firewall' => '?',
            'debug.security.user_value_resolver' => '?',
            'debug.security.user_value_resolver.inner' => '?',
            'debug.security.voter.security.access.authenticated_voter' => '?',
            'debug.security.voter.security.access.simple_role_voter' => '?',
            'debug.security.voter.vote_listener' => '?',
            'debug.stopwatch' => '?',
            'debug.traced.messenger.bus.default' => '?',
            'debug.traced.messenger.bus.default.inner' => '?',
            'debug.validator' => '?',
            'debug.validator.inner' => '?',
            'dependency_injection.config.container_parameters_resource_checker' => '?',
            'disallow_search_engine_index_response_listener' => '?',
            'doctrine.cache_clear_metadata_command' => '?',
            'doctrine.cache_clear_query_cache_command' => '?',
            'doctrine.cache_clear_result_command' => '?',
            'doctrine.cache_collection_region_command' => '?',
            'doctrine.clear_entity_region_command' => '?',
            'doctrine.clear_query_region_command' => '?',
            'doctrine.database_create_command' => '?',
            'doctrine.database_drop_command' => '?',
            'doctrine.database_import_command' => '?',
            'doctrine.dbal.connection_factory' => '?',
            'doctrine.dbal.default_connection.configuration' => '?',
            'doctrine.dbal.default_connection.event_manager' => '?',
            'doctrine.dbal.event_manager' => '?',
            'doctrine.dbal.logger' => '?',
            'doctrine.dbal.logger.chain.default' => '?',
            'doctrine.dbal.logger.profiling.default' => '?',
            'doctrine.ensure_production_settings_command' => '?',
            'doctrine.fixtures.loader' => '?',
            'doctrine.fixtures.purger.orm_purger_factory' => '?',
            'doctrine.fixtures_load_command' => '?',
            'doctrine.mapping_convert_command' => '?',
            'doctrine.mapping_import_command' => '?',
            'doctrine.mapping_info_command' => '?',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => '?',
            'doctrine.orm.container_repository_factory' => '?',
            'doctrine.orm.default_annotation_metadata_driver' => '?',
            'doctrine.orm.default_configuration' => '?',
            'doctrine.orm.default_entity_listener_resolver' => '?',
            'doctrine.orm.default_entity_manager.event_manager' => '?',
            'doctrine.orm.default_entity_manager.property_info_extractor' => '?',
            'doctrine.orm.default_entity_manager.validator_loader' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.default_manager_configurator' => '?',
            'doctrine.orm.default_metadata_cache' => '?',
            'doctrine.orm.default_metadata_driver' => '?',
            'doctrine.orm.default_query_cache' => '?',
            'doctrine.orm.default_result_cache' => '?',
            'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' => '?',
            'doctrine.orm.metadata.annotation_reader' => '?',
            'doctrine.orm.naming_strategy.underscore_number_aware' => '?',
            'doctrine.orm.proxy_cache_warmer' => '?',
            'doctrine.orm.quote_strategy.default' => '?',
            'doctrine.orm.validator.unique' => '?',
            'doctrine.orm.validator_initializer' => '?',
            'doctrine.query_dql_command' => '?',
            'doctrine.query_sql_command' => '?',
            'doctrine.schema_create_command' => '?',
            'doctrine.schema_drop_command' => '?',
            'doctrine.schema_update_command' => '?',
            'doctrine.schema_validate_command' => '?',
            'doctrine.twig.doctrine_extension' => '?',
            'doctrine_migrations.diff_command' => '?',
            'doctrine_migrations.dump_schema_command' => '?',
            'doctrine_migrations.execute_command' => '?',
            'doctrine_migrations.generate_command' => '?',
            'doctrine_migrations.latest_command' => '?',
            'doctrine_migrations.migrate_command' => '?',
            'doctrine_migrations.rollup_command' => '?',
            'doctrine_migrations.status_command' => '?',
            'doctrine_migrations.up_to_date_command' => '?',
            'doctrine_migrations.version_command' => '?',
            'enqueue.client.consume_command' => '?',
            'enqueue.client.default.client_extensions' => '?',
            'enqueue.client.default.config' => '?',
            'enqueue.client.default.consumption_extensions' => '?',
            'enqueue.client.default.context' => '?',
            'enqueue.client.default.delegate_processor' => '?',
            'enqueue.client.default.driver' => '?',
            'enqueue.client.default.driver_factory' => '?',
            'enqueue.client.default.driver_factory.inner' => '?',
            'enqueue.client.default.driver_factory.outer' => '?',
            'enqueue.client.default.exclusive_command_extension' => '?',
            'enqueue.client.default.flush_spool_producer_extension' => '?',
            'enqueue.client.default.flush_spool_producer_listener' => '?',
            'enqueue.client.default.lazy_producer' => '?',
            'enqueue.client.default.processor_registry' => '?',
            'enqueue.client.default.queue_consumer' => '?',
            'enqueue.client.default.route_collection' => '?',
            'enqueue.client.default.router_processor' => '?',
            'enqueue.client.default.rpc_factory' => '?',
            'enqueue.client.default.set_router_properties_extension' => '?',
            'enqueue.client.default.spool_producer' => '?',
            'enqueue.client.default.traceable_producer' => '?',
            'enqueue.client.default.traceable_producer.inner' => '?',
            'enqueue.client.produce_command' => '?',
            'enqueue.client.routes_command' => '?',
            'enqueue.client.setup_broker_command' => '?',
            'enqueue.consumption.reply_extension' => '?',
            'enqueue.locator' => '?',
            'enqueue.messenger_transport.factory' => '?',
            'enqueue.profiler.message_queue_collector' => '?',
            'enqueue.transport.consume_command' => '?',
            'enqueue.transport.default.connection_factory' => '?',
            'enqueue.transport.default.connection_factory_factory' => '?',
            'enqueue.transport.default.connection_factory_factory.inner' => '?',
            'enqueue.transport.default.connection_factory_factory.outer' => '?',
            'enqueue.transport.default.consumption_extensions' => '?',
            'enqueue.transport.default.context' => '?',
            'enqueue.transport.default.log_extension' => '?',
            'enqueue.transport.default.processor_registry' => '?',
            'enqueue.transport.default.queue_consumer' => '?',
            'error_handler.error_renderer.html' => '?',
            'error_handler.error_renderer.serializer' => '?',
            'error_renderer' => '?',
            'error_renderer.html' => '?',
            'error_renderer.serializer' => '?',
            'exception_listener' => '?',
            'file_locator' => '?',
            'form.choice_list_factory' => '?',
            'form.choice_list_factory.cached' => '?',
            'form.choice_list_factory.default' => '?',
            'form.choice_list_factory.property_access' => '?',
            'form.extension' => '?',
            'form.property_accessor' => '?',
            'form.registry' => '?',
            'form.resolved_type_factory' => '?',
            'form.server_params' => '?',
            'form.type.choice' => '?',
            'form.type.entity' => '?',
            'form.type.form' => '?',
            'form.type_extension.csrf' => '?',
            'form.type_extension.form.data_collector' => '?',
            'form.type_extension.form.http_foundation' => '?',
            'form.type_extension.form.request_handler' => '?',
            'form.type_extension.form.transformation_failure_handling' => '?',
            'form.type_extension.form.validator' => '?',
            'form.type_extension.repeated.validator' => '?',
            'form.type_extension.submit.validator' => '?',
            'form.type_guesser.doctrine' => '?',
            'form.type_guesser.validator' => '?',
            'fragment.handler' => '?',
            'fragment.renderer.inline' => '?',
            'framework_extra_bundle.argument_name_convertor' => '?',
            'framework_extra_bundle.date_time_param_converter' => '?',
            'framework_extra_bundle.event.is_granted' => '?',
            'http_client' => '?',
            'locale_listener' => '?',
            'logger' => '?',
            'mailer.data_collector' => '?',
            'mailer.envelope_listener' => '?',
            'mailer.logger_message_listener' => '?',
            'mailer.messenger.message_handler' => '?',
            'mailer.transport_factory' => '?',
            'mailer.transport_factory.null' => '?',
            'mailer.transport_factory.sendmail' => '?',
            'mailer.transport_factory.smtp' => '?',
            'mailer.transports' => '?',
            'messenger.bus.default' => '?',
            'messenger.bus.default.messenger.handlers_locator' => '?',
            'messenger.bus.default.middleware.add_bus_name_stamp_middleware' => '?',
            'messenger.bus.default.middleware.handle_message' => '?',
            'messenger.bus.default.middleware.traceable' => '?',
            'messenger.default_serializer' => '?',
            'messenger.failure.send_failed_message_to_failure_transport_listener' => '?',
            'messenger.listener.stop_worker_on_restart_signal_listener' => '?',
            'messenger.middleware.dispatch_after_current_bus' => '?',
            'messenger.middleware.failed_message_processing_middleware' => '?',
            'messenger.middleware.reject_redelivered_message_middleware' => '?',
            'messenger.middleware.send_message' => '?',
            'messenger.receiver_locator' => '?',
            'messenger.retry.multiplier_retry_strategy.failed' => '?',
            'messenger.retry.multiplier_retry_strategy.mailer' => '?',
            'messenger.retry.send_failed_message_for_retry_listener' => '?',
            'messenger.retry_strategy_locator' => '?',
            'messenger.routable_message_bus' => '?',
            'messenger.senders_locator' => '?',
            'messenger.transport.amqp.factory' => '?',
            'messenger.transport.doctrine.factory' => '?',
            'messenger.transport.failed' => '?',
            'messenger.transport.in_memory.factory' => '?',
            'messenger.transport.mailer' => '?',
            'messenger.transport.native_php_serializer' => '?',
            'messenger.transport.redis.factory' => '?',
            'messenger.transport.sync.factory' => '?',
            'messenger.transport_factory' => '?',
            'mime_types' => '?',
            'notifier.transport_factory.null' => '?',
            'parameter_bag' => '?',
            'profiler.storage' => '?',
            'profiler_listener' => '?',
            'property_accessor' => '?',
            'property_info' => '?',
            'property_info.php_doc_extractor' => '?',
            'property_info.reflection_extractor' => '?',
            'property_info.serializer_extractor' => '?',
            'response_listener' => '?',
            'router.cache_warmer' => '?',
            'router.default' => '?',
            'router.request_context' => '?',
            'router_listener' => '?',
            'routing.loader.annotation' => '?',
            'routing.loader.annotation.directory' => '?',
            'routing.loader.annotation.file' => '?',
            'routing.loader.container' => '?',
            'routing.loader.directory' => '?',
            'routing.loader.glob' => '?',
            'routing.loader.php' => '?',
            'routing.loader.xml' => '?',
            'routing.loader.yml' => '?',
            'routing.resolver' => '?',
            'secrets.local_vault' => '?',
            'secrets.vault' => '?',
            'security.access.authenticated_voter' => '?',
            'security.access.decision_manager' => '?',
            'security.access.simple_role_voter' => '?',
            'security.access_listener' => '?',
            'security.access_map' => '?',
            'security.authentication.guard_handler' => '?',
            'security.authentication.listener.anonymous.main' => '?',
            'security.authentication.listener.guard.main' => '?',
            'security.authentication.manager' => '?',
            'security.authentication.provider.anonymous.main' => '?',
            'security.authentication.provider.guard.main' => '?',
            'security.authentication.retry_entry_point' => '?',
            'security.authentication.session_strategy' => '?',
            'security.authentication.session_strategy.main' => '?',
            'security.authentication.trust_resolver' => '?',
            'security.channel_listener' => '?',
            'security.command.user_password_encoder' => '?',
            'security.context_listener.0' => '?',
            'security.csrf.token_generator' => '?',
            'security.csrf.token_storage' => '?',
            'security.encoder_factory' => '?',
            'security.encoder_factory.generic' => '?',
            'security.exception_listener.main' => '?',
            'security.firewall' => '?',
            'security.firewall.map' => '?',
            'security.firewall.map.config.dev' => '?',
            'security.firewall.map.config.main' => '?',
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
            'security.http_utils' => '?',
            'security.logout.handler.csrf_token_clearing' => '?',
            'security.logout.handler.session' => '?',
            'security.logout.success_handler.main' => '?',
            'security.logout_listener.main' => '?',
            'security.logout_url_generator' => '?',
            'security.rememberme.response_listener' => '?',
            'security.role_hierarchy' => '?',
            'security.untracked_token_storage' => '?',
            'security.user.provider.concrete.user_provider' => '?',
            'security.user_checker' => '?',
            'security.user_checker.main' => '?',
            'security.user_password_encoder.generic' => '?',
            'security.user_value_resolver' => '?',
            'security.validator.user_password' => '?',
            'sensio_framework_extra.cache.listener' => '?',
            'sensio_framework_extra.controller.listener' => '?',
            'sensio_framework_extra.converter.doctrine.orm' => '?',
            'sensio_framework_extra.converter.listener' => '?',
            'sensio_framework_extra.converter.manager' => '?',
            'sensio_framework_extra.security.listener' => '?',
            'sensio_framework_extra.view.guesser' => '?',
            'sensio_framework_extra.view.listener' => '?',
            'serializer.denormalizer.array' => '?',
            'serializer.encoder.csv' => '?',
            'serializer.encoder.json' => '?',
            'serializer.encoder.xml' => '?',
            'serializer.encoder.yaml' => '?',
            'serializer.mapping.cache_warmer' => '?',
            'serializer.mapping.chain_loader' => '?',
            'serializer.mapping.class_discriminator_resolver' => '?',
            'serializer.mapping.class_metadata_factory' => '?',
            'serializer.name_converter.metadata_aware' => '?',
            'serializer.normalizer.constraint_violation_list' => '?',
            'serializer.normalizer.data_uri' => '?',
            'serializer.normalizer.dateinterval' => '?',
            'serializer.normalizer.datetime' => '?',
            'serializer.normalizer.datetimezone' => '?',
            'serializer.normalizer.json_serializable' => '?',
            'serializer.normalizer.object' => '?',
            'serializer.normalizer.problem' => '?',
            'serializer.property_accessor' => '?',
            'session.flash_bag' => '?',
            'session.storage' => '?',
            'session.storage.filesystem' => '?',
            'session.storage.metadata_bag' => '?',
            'session.storage.mock_file' => '?',
            'session_listener' => '?',
            'streamed_response_listener' => '?',
            'test.client.cookiejar' => '?',
            'test.client.history' => '?',
            'test.session.listener' => '?',
            'texter.messenger.sms_handler' => '?',
            'texter.transport_factory' => '?',
            'texter.transports' => '?',
            'twig.app_variable' => '?',
            'twig.command.debug' => '?',
            'twig.command.lint' => '?',
            'twig.configurator.environment' => '?',
            'twig.error_renderer.html' => '?',
            'twig.error_renderer.html.inner' => '?',
            'twig.extension.code' => '?',
            'twig.extension.cssinliner' => '?',
            'twig.extension.debug' => '?',
            'twig.extension.debug.stopwatch' => '?',
            'twig.extension.form' => '?',
            'twig.extension.httpfoundation' => '?',
            'twig.extension.httpkernel' => '?',
            'twig.extension.inky' => '?',
            'twig.extension.logout_url' => '?',
            'twig.extension.profiler' => '?',
            'twig.extension.routing' => '?',
            'twig.extension.security' => '?',
            'twig.extension.security_csrf' => '?',
            'twig.extension.trans' => '?',
            'twig.extension.webprofiler' => '?',
            'twig.extension.yaml' => '?',
            'twig.form.engine' => '?',
            'twig.form.renderer' => '?',
            'twig.loader' => '?',
            'twig.loader.filesystem' => '?',
            'twig.loader.native_filesystem' => '?',
            'twig.mailer.message_listener' => '?',
            'twig.mime_body_renderer' => '?',
            'twig.missing_extension_suggestor' => '?',
            'twig.profile' => '?',
            'twig.runtime.httpkernel' => '?',
            'twig.runtime.security_csrf' => '?',
            'twig.runtime_loader' => '?',
            'twig.template_cache_warmer' => '?',
            'twig.template_iterator' => '?',
            'url_helper' => '?',
            'validate_request_listener' => '?',
            'validator.builder' => '?',
            'validator.email' => '?',
            'validator.expression' => '?',
            'validator.mapping.cache_warmer' => '?',
            'validator.mapping.class_metadata_factory' => '?',
            'validator.not_compromised_password' => '?',
            'validator.property_info_loader' => '?',
            'validator.validator_factory' => '?',
            'web_profiler.csp.handler' => '?',
        ]);
    }

    /**
     * Gets the public 'test.service_container' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Test\TestContainer
     */
    protected function getTest_ServiceContainerService()
    {
        return $this->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($this->services['kernel'] ?? $this->get('kernel', 1)), 'test.private_services_locator');
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService()), ['strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => true]);

        $a = ($this->privates['twig.missing_extension_suggestor'] ?? ($this->privates['twig.missing_extension_suggestor'] = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor()));

        $instance->addExtension(($this->privates['twig.extension.security_csrf'] ?? ($this->privates['twig.extension.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfExtension())));
        $instance->addExtension(($this->privates['twig.extension.profiler'] ?? $this->getTwig_Extension_ProfilerService()));
        $instance->addExtension(($this->privates['twig.extension.trans'] ?? ($this->privates['twig.extension.trans'] = new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL))));
        $instance->addExtension(($this->privates['twig.extension.code'] ?? $this->getTwig_Extension_CodeService()));
        $instance->addExtension(($this->privates['twig.extension.routing'] ?? $this->getTwig_Extension_RoutingService()));
        $instance->addExtension(($this->privates['twig.extension.yaml'] ?? ($this->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension())));
        $instance->addExtension(($this->privates['twig.extension.debug.stopwatch'] ?? $this->getTwig_Extension_Debug_StopwatchService()));
        $instance->addExtension(($this->privates['twig.extension.httpkernel'] ?? ($this->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension())));
        $instance->addExtension(($this->privates['twig.extension.httpfoundation'] ?? $this->getTwig_Extension_HttpfoundationService()));
        $instance->addExtension(($this->privates['twig.extension.form'] ?? ($this->privates['twig.extension.form'] = new \Symfony\Bridge\Twig\Extension\FormExtension())));
        $instance->addExtension(($this->privates['twig.extension.logout_url'] ?? $this->getTwig_Extension_LogoutUrlService()));
        $instance->addExtension(($this->privates['twig.extension.security'] ?? $this->getTwig_Extension_SecurityService()));
        $instance->addExtension(($this->privates['twig.extension.debug'] ?? ($this->privates['twig.extension.debug'] = new \Twig\Extension\DebugExtension())));
        $instance->addExtension(($this->privates['twig.extension.cssinliner'] ?? ($this->privates['twig.extension.cssinliner'] = new \Twig\Extra\CssInliner\CssInlinerExtension())));
        $instance->addExtension(($this->privates['twig.extension.inky'] ?? ($this->privates['twig.extension.inky'] = new \Twig\Extra\Inky\InkyExtension())));
        $instance->addExtension(($this->privates['doctrine.twig.doctrine_extension'] ?? ($this->privates['doctrine.twig.doctrine_extension'] = new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension())));
        $instance->addExtension(($this->privates['twig.extension.webprofiler'] ?? $this->getTwig_Extension_WebprofilerService()));
        $instance->addGlobal('app', ($this->privates['twig.app_variable'] ?? $this->getTwig_AppVariableService()));
        $instance->addRuntimeLoader(($this->privates['twig.runtime_loader'] ?? $this->getTwig_RuntimeLoaderService()));
        $instance->registerUndefinedFilterCallback([0 => $a, 1 => 'suggestFilter']);
        $instance->registerUndefinedFunctionCallback([0 => $a, 1 => 'suggestFunction']);
        ($this->privates['twig.configurator.environment'] ?? $this->getTwig_Configurator_EnvironmentService())->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['debug.validator.inner'] ?? $this->getDebug_Validator_InnerService()));
    }

    /**
     * Gets the public 'web_profiler.controller.exception_panel' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController
     */
    protected function getWebProfiler_Controller_ExceptionPanelService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\ExceptionPanelController.php';

        return $this->services['web_profiler.controller.exception_panel'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController(($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), ($this->services['profiler'] ?? $this->getProfilerService()));
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\ProfilerController.php';

        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($this->services['router'] ?? $this->getRouterService()), ($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), $this->parameters['data_collector.templates'], ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()), \dirname(__DIR__, 4));
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Controller\\RouterController.php';

        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private '.debug.http_client' shared service.
     *
     * @return \Symfony\Component\HttpClient\TraceableHttpClient
     */
    protected function get_Debug_HttpClientService()
    {
        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);
        $a->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $this->privates['.debug.http_client'] = new \Symfony\Component\HttpClient\TraceableHttpClient($a);
    }

    /**
     * Gets the private '.messenger.handler_descriptor.XZowc.T' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    protected function get_Messenger_HandlerDescriptor_XZowc_TService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Handler\\HandlerDescriptor.php';

        return $this->privates['.messenger.handler_descriptor.XZowc.T'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($this->privates['texter.messenger.sms_handler'] ?? $this->getTexter_Messenger_SmsHandlerService()), []);
    }

    /**
     * Gets the private '.messenger.handler_descriptor.tGvt0LH' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    protected function get_Messenger_HandlerDescriptor_TGvt0LHService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Handler\\HandlerDescriptor.php';

        return $this->privates['.messenger.handler_descriptor.tGvt0LH'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($this->privates['mailer.messenger.message_handler'] ?? $this->getMailer_Messenger_MessageHandlerService()), []);
    }

    /**
     * Gets the private '.messenger.handler_descriptor.vMw0m61' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    protected function get_Messenger_HandlerDescriptor_VMw0m61Service()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Handler\\HandlerDescriptor.php';

        return $this->privates['.messenger.handler_descriptor.vMw0m61'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($this->privates['chatter.messenger.chat_handler'] ?? $this->getChatter_Messenger_ChatHandlerService()), []);
    }

    /**
     * Gets the private '.service_locator.03.XrZ5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_03_XrZ5Service()
    {
        return $this->privates['.service_locator.03.XrZ5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'presenter' => ['privates', 'App\\UserInterface\\Presenter\\Security\\AskPasswordResetPresenter', 'getAskPasswordResetPresenterService', false],
            'useCase' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\AskPasswordReset', 'getAskPasswordResetService', false],
        ], [
            'presenter' => 'App\\UserInterface\\Presenter\\Security\\AskPasswordResetPresenter',
            'useCase' => 'TYannis\\SDS\\Domain\\Security\\UseCase\\AskPasswordReset',
        ]);
    }

    /**
     * Gets the private '.service_locator.9Dg1uKX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_9Dg1uKXService()
    {
        return $this->privates['.service_locator.9Dg1uKX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'create' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Create', 'getCreateService', false],
            'presenter' => ['privates', 'App\\UserInterface\\Presenter\\Category\\CreatePresenter', 'getCreatePresenterService', false],
        ], [
            'create' => 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Create',
            'presenter' => 'App\\UserInterface\\Presenter\\Category\\CreatePresenter',
        ]);
    }

    /**
     * Gets the private '.service_locator.J_n9Uob' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_JN9UobService()
    {
        return $this->privates['.service_locator.J_n9Uob'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'listing' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Listing', 'getListingService', false],
        ], [
            'listing' => 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Listing',
        ]);
    }

    /**
     * Gets the private '.service_locator.KjnsIN8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_KjnsIN8Service()
    {
        return $this->privates['.service_locator.KjnsIN8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'create' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Update', 'getUpdateService', false],
            'domainArticle' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\Entity\\Article', NULL, 'Cannot autowire service "TYannis\\SDS\\Domain\\Blog\\Entity\\Article": argument "$id" of method "__construct()" references interface "Ramsey\\Uuid\\UuidInterface" but no such service exists. Did you create a class that implements this interface?'],
            'presenter' => ['privates', 'App\\UserInterface\\Presenter\\Article\\UpdatePresenter', 'getUpdatePresenterService', false],
        ], [
            'create' => 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Update',
            'domainArticle' => 'TYannis\\SDS\\Domain\\Blog\\Entity\\Article',
            'presenter' => 'App\\UserInterface\\Presenter\\Article\\UpdatePresenter',
        ]);
    }

    /**
     * Gets the private '.service_locator.P9gTwcF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_P9gTwcFService()
    {
        return $this->privates['.service_locator.P9gTwcF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'domainCategory' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\Entity\\Category', NULL, 'Cannot autowire service "TYannis\\SDS\\Domain\\Blog\\Entity\\Category": argument "$id" of method "__construct()" references interface "Ramsey\\Uuid\\UuidInterface" but no such service exists. Did you create a class that implements this interface?'],
            'presenter' => ['privates', 'App\\UserInterface\\Presenter\\Category\\RemovePresenter', 'getRemovePresenterService', false],
            'remove' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Remove', 'getRemoveService', false],
        ], [
            'domainCategory' => 'TYannis\\SDS\\Domain\\Blog\\Entity\\Category',
            'presenter' => 'App\\UserInterface\\Presenter\\Category\\RemovePresenter',
            'remove' => 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Remove',
        ]);
    }

    /**
     * Gets the private '.service_locator.W5jh70N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_W5jh70NService()
    {
        return $this->privates['.service_locator.W5jh70N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'create' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\Role\\Create', 'getCreate2Service', false],
            'presenter' => ['privates', 'App\\UserInterface\\Presenter\\Security\\Role\\CreatePresenter', 'getCreatePresenter2Service', false],
        ], [
            'create' => 'TYannis\\SDS\\Domain\\Security\\UseCase\\Role\\Create',
            'presenter' => 'App\\UserInterface\\Presenter\\Security\\Role\\CreatePresenter',
        ]);
    }

    /**
     * Gets the private '.service_locator.XAMoLLh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_XAMoLLhService()
    {
        return $this->privates['.service_locator.XAMoLLh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'create' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Update', 'getUpdate2Service', false],
            'domainCategory' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\Entity\\Category', NULL, 'Cannot autowire service "TYannis\\SDS\\Domain\\Blog\\Entity\\Category": argument "$id" of method "__construct()" references interface "Ramsey\\Uuid\\UuidInterface" but no such service exists. Did you create a class that implements this interface?'],
            'presenter' => ['privates', 'App\\UserInterface\\Presenter\\Category\\UpdatePresenter', 'getUpdatePresenter2Service', false],
        ], [
            'create' => 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Update',
            'domainCategory' => 'TYannis\\SDS\\Domain\\Blog\\Entity\\Category',
            'presenter' => 'App\\UserInterface\\Presenter\\Category\\UpdatePresenter',
        ]);
    }

    /**
     * Gets the private '.service_locator.XFI_2EC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_XFI2ECService()
    {
        return $this->privates['.service_locator.XFI_2EC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', false],
            'mailer' => ['privates', 'messenger.transport.mailer', 'getMessenger_Transport_MailerService', false],
            'messenger.transport.failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', false],
            'messenger.transport.mailer' => ['privates', 'messenger.transport.mailer', 'getMessenger_Transport_MailerService', false],
        ], [
            'failed' => '?',
            'mailer' => '?',
            'messenger.transport.failed' => '?',
            'messenger.transport.mailer' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.YAk51NA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_YAk51NAService()
    {
        return $this->privates['.service_locator.YAk51NA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'listing' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Listing', 'getListing2Service', false],
        ], [
            'listing' => 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Listing',
        ]);
    }

    /**
     * Gets the private '.service_locator.dcnVT0e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_DcnVT0eService()
    {
        return $this->privates['.service_locator.dcnVT0e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'listing' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\User\\Listing', 'getListing3Service', false],
        ], [
            'listing' => 'TYannis\\SDS\\Domain\\Security\\UseCase\\User\\Listing',
        ]);
    }

    /**
     * Gets the private '.service_locator.iovKmwl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_IovKmwlService()
    {
        return $this->privates['.service_locator.iovKmwl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'presenter' => ['privates', 'App\\UserInterface\\Presenter\\Article\\CreatePresenter', 'getCreatePresenter3Service', false],
        ], [
            'presenter' => 'App\\UserInterface\\Presenter\\Article\\CreatePresenter',
        ]);
    }

    /**
     * Gets the private '.service_locator.pRFRkqt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_PRFRkqtService()
    {
        return $this->privates['.service_locator.pRFRkqt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\UserInterface\\Controller\\Article\\CreateController::__invoke' => ['privates', '.service_locator.iovKmwl', 'get_ServiceLocator_IovKmwlService', false],
            'App\\UserInterface\\Controller\\Article\\ListingController::__invoke' => ['privates', '.service_locator.J_n9Uob', 'get_ServiceLocator_JN9UobService', false],
            'App\\UserInterface\\Controller\\Article\\RemoveController::__invoke' => ['privates', '.service_locator.sf9XkRX', 'get_ServiceLocator_Sf9XkRXService', false],
            'App\\UserInterface\\Controller\\Article\\UpdateController::__invoke' => ['privates', '.service_locator.KjnsIN8', 'get_ServiceLocator_KjnsIN8Service', false],
            'App\\UserInterface\\Controller\\Category\\CreateController::__invoke' => ['privates', '.service_locator.9Dg1uKX', 'get_ServiceLocator_9Dg1uKXService', false],
            'App\\UserInterface\\Controller\\Category\\ListingController::__invoke' => ['privates', '.service_locator.YAk51NA', 'get_ServiceLocator_YAk51NAService', false],
            'App\\UserInterface\\Controller\\Category\\RemoveController::__invoke' => ['privates', '.service_locator.P9gTwcF', 'get_ServiceLocator_P9gTwcFService', false],
            'App\\UserInterface\\Controller\\Category\\UpdateController::__invoke' => ['privates', '.service_locator.XAMoLLh', 'get_ServiceLocator_XAMoLLhService', false],
            'App\\UserInterface\\Controller\\LoginController::__invoke' => ['privates', '.service_locator.q6jLs_L', 'get_ServiceLocator_Q6jLsLService', false],
            'App\\UserInterface\\Controller\\RegistrationController::__invoke' => ['privates', '.service_locator.pgljoTS', 'get_ServiceLocator_PgljoTSService', false],
            'App\\UserInterface\\Controller\\Security\\AskPasswordResetController::__invoke' => ['privates', '.service_locator.03.XrZ5', 'get_ServiceLocator_03_XrZ5Service', false],
            'App\\UserInterface\\Controller\\Security\\RecoverPasswordController::__invoke' => ['privates', '.service_locator.paOaDO3', 'get_ServiceLocator_PaOaDO3Service', false],
            'App\\UserInterface\\Controller\\Security\\Role\\CreateController::__invoke' => ['privates', '.service_locator.W5jh70N', 'get_ServiceLocator_W5jh70NService', false],
            'App\\UserInterface\\Controller\\Security\\User\\ListingController::__invoke' => ['privates', '.service_locator.dcnVT0e', 'get_ServiceLocator_DcnVT0eService', false],
            'App\\UserInterface\\Controller\\Article\\CreateController:__invoke' => ['privates', '.service_locator.iovKmwl', 'get_ServiceLocator_IovKmwlService', false],
            'App\\UserInterface\\Controller\\Article\\CreateController' => ['privates', '.service_locator.iovKmwl', 'get_ServiceLocator_IovKmwlService', false],
            'App\\UserInterface\\Controller\\Article\\ListingController:__invoke' => ['privates', '.service_locator.J_n9Uob', 'get_ServiceLocator_JN9UobService', false],
            'App\\UserInterface\\Controller\\Article\\ListingController' => ['privates', '.service_locator.J_n9Uob', 'get_ServiceLocator_JN9UobService', false],
            'App\\UserInterface\\Controller\\Article\\RemoveController:__invoke' => ['privates', '.service_locator.sf9XkRX', 'get_ServiceLocator_Sf9XkRXService', false],
            'App\\UserInterface\\Controller\\Article\\RemoveController' => ['privates', '.service_locator.sf9XkRX', 'get_ServiceLocator_Sf9XkRXService', false],
            'App\\UserInterface\\Controller\\Article\\UpdateController:__invoke' => ['privates', '.service_locator.KjnsIN8', 'get_ServiceLocator_KjnsIN8Service', false],
            'App\\UserInterface\\Controller\\Article\\UpdateController' => ['privates', '.service_locator.KjnsIN8', 'get_ServiceLocator_KjnsIN8Service', false],
            'App\\UserInterface\\Controller\\Category\\CreateController:__invoke' => ['privates', '.service_locator.9Dg1uKX', 'get_ServiceLocator_9Dg1uKXService', false],
            'App\\UserInterface\\Controller\\Category\\CreateController' => ['privates', '.service_locator.9Dg1uKX', 'get_ServiceLocator_9Dg1uKXService', false],
            'App\\UserInterface\\Controller\\Category\\ListingController:__invoke' => ['privates', '.service_locator.YAk51NA', 'get_ServiceLocator_YAk51NAService', false],
            'App\\UserInterface\\Controller\\Category\\ListingController' => ['privates', '.service_locator.YAk51NA', 'get_ServiceLocator_YAk51NAService', false],
            'App\\UserInterface\\Controller\\Category\\RemoveController:__invoke' => ['privates', '.service_locator.P9gTwcF', 'get_ServiceLocator_P9gTwcFService', false],
            'App\\UserInterface\\Controller\\Category\\RemoveController' => ['privates', '.service_locator.P9gTwcF', 'get_ServiceLocator_P9gTwcFService', false],
            'App\\UserInterface\\Controller\\Category\\UpdateController:__invoke' => ['privates', '.service_locator.XAMoLLh', 'get_ServiceLocator_XAMoLLhService', false],
            'App\\UserInterface\\Controller\\Category\\UpdateController' => ['privates', '.service_locator.XAMoLLh', 'get_ServiceLocator_XAMoLLhService', false],
            'App\\UserInterface\\Controller\\LoginController:__invoke' => ['privates', '.service_locator.q6jLs_L', 'get_ServiceLocator_Q6jLsLService', false],
            'App\\UserInterface\\Controller\\LoginController' => ['privates', '.service_locator.q6jLs_L', 'get_ServiceLocator_Q6jLsLService', false],
            'App\\UserInterface\\Controller\\RegistrationController:__invoke' => ['privates', '.service_locator.pgljoTS', 'get_ServiceLocator_PgljoTSService', false],
            'App\\UserInterface\\Controller\\RegistrationController' => ['privates', '.service_locator.pgljoTS', 'get_ServiceLocator_PgljoTSService', false],
            'App\\UserInterface\\Controller\\Security\\AskPasswordResetController:__invoke' => ['privates', '.service_locator.03.XrZ5', 'get_ServiceLocator_03_XrZ5Service', false],
            'App\\UserInterface\\Controller\\Security\\AskPasswordResetController' => ['privates', '.service_locator.03.XrZ5', 'get_ServiceLocator_03_XrZ5Service', false],
            'App\\UserInterface\\Controller\\Security\\RecoverPasswordController:__invoke' => ['privates', '.service_locator.paOaDO3', 'get_ServiceLocator_PaOaDO3Service', false],
            'App\\UserInterface\\Controller\\Security\\RecoverPasswordController' => ['privates', '.service_locator.paOaDO3', 'get_ServiceLocator_PaOaDO3Service', false],
            'App\\UserInterface\\Controller\\Security\\Role\\CreateController:__invoke' => ['privates', '.service_locator.W5jh70N', 'get_ServiceLocator_W5jh70NService', false],
            'App\\UserInterface\\Controller\\Security\\Role\\CreateController' => ['privates', '.service_locator.W5jh70N', 'get_ServiceLocator_W5jh70NService', false],
            'App\\UserInterface\\Controller\\Security\\User\\ListingController:__invoke' => ['privates', '.service_locator.dcnVT0e', 'get_ServiceLocator_DcnVT0eService', false],
            'App\\UserInterface\\Controller\\Security\\User\\ListingController' => ['privates', '.service_locator.dcnVT0e', 'get_ServiceLocator_DcnVT0eService', false],
        ], [
            'App\\UserInterface\\Controller\\Article\\CreateController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Article\\ListingController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Article\\RemoveController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Article\\UpdateController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Category\\CreateController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Category\\ListingController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Category\\RemoveController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Category\\UpdateController::__invoke' => '?',
            'App\\UserInterface\\Controller\\LoginController::__invoke' => '?',
            'App\\UserInterface\\Controller\\RegistrationController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Security\\AskPasswordResetController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Security\\RecoverPasswordController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Security\\Role\\CreateController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Security\\User\\ListingController::__invoke' => '?',
            'App\\UserInterface\\Controller\\Article\\CreateController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Article\\CreateController' => '?',
            'App\\UserInterface\\Controller\\Article\\ListingController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Article\\ListingController' => '?',
            'App\\UserInterface\\Controller\\Article\\RemoveController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Article\\RemoveController' => '?',
            'App\\UserInterface\\Controller\\Article\\UpdateController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Article\\UpdateController' => '?',
            'App\\UserInterface\\Controller\\Category\\CreateController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Category\\CreateController' => '?',
            'App\\UserInterface\\Controller\\Category\\ListingController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Category\\ListingController' => '?',
            'App\\UserInterface\\Controller\\Category\\RemoveController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Category\\RemoveController' => '?',
            'App\\UserInterface\\Controller\\Category\\UpdateController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Category\\UpdateController' => '?',
            'App\\UserInterface\\Controller\\LoginController:__invoke' => '?',
            'App\\UserInterface\\Controller\\LoginController' => '?',
            'App\\UserInterface\\Controller\\RegistrationController:__invoke' => '?',
            'App\\UserInterface\\Controller\\RegistrationController' => '?',
            'App\\UserInterface\\Controller\\Security\\AskPasswordResetController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Security\\AskPasswordResetController' => '?',
            'App\\UserInterface\\Controller\\Security\\RecoverPasswordController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Security\\RecoverPasswordController' => '?',
            'App\\UserInterface\\Controller\\Security\\Role\\CreateController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Security\\Role\\CreateController' => '?',
            'App\\UserInterface\\Controller\\Security\\User\\ListingController:__invoke' => '?',
            'App\\UserInterface\\Controller\\Security\\User\\ListingController' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.paOaDO3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_PaOaDO3Service()
    {
        return $this->privates['.service_locator.paOaDO3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'presenter' => ['privates', 'App\\UserInterface\\Presenter\\Security\\RecoverPasswordPresenter', 'getRecoverPasswordPresenterService', false],
            'useCase' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\RecoverPassword', 'getRecoverPasswordService', false],
        ], [
            'presenter' => 'App\\UserInterface\\Presenter\\Security\\RecoverPasswordPresenter',
            'useCase' => 'TYannis\\SDS\\Domain\\Security\\UseCase\\RecoverPassword',
        ]);
    }

    /**
     * Gets the private '.service_locator.pgljoTS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_PgljoTSService()
    {
        return $this->privates['.service_locator.pgljoTS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'presenter' => ['privates', 'App\\UserInterface\\Presenter\\RegistrationPresenter', 'getRegistrationPresenterService', false],
            'registration' => ['privates', 'TYannis\\SDS\\Domain\\Security\\UseCase\\Registration', 'getRegistrationService', false],
        ], [
            'presenter' => 'App\\UserInterface\\Presenter\\RegistrationPresenter',
            'registration' => 'TYannis\\SDS\\Domain\\Security\\UseCase\\Registration',
        ]);
    }

    /**
     * Gets the private '.service_locator.q6jLs_L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Q6jLsLService()
    {
        return $this->privates['.service_locator.q6jLs_L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authenticationUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
        ], [
            'authenticationUtils' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.sf9XkRX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Sf9XkRXService()
    {
        return $this->privates['.service_locator.sf9XkRX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'domainArticle' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\Entity\\Article', NULL, 'Cannot autowire service "TYannis\\SDS\\Domain\\Blog\\Entity\\Article": argument "$id" of method "__construct()" references interface "Ramsey\\Uuid\\UuidInterface" but no such service exists. Did you create a class that implements this interface?'],
            'presenter' => ['privates', 'App\\UserInterface\\Presenter\\Article\\RemovePresenter', 'getRemovePresenter2Service', false],
            'remove' => ['privates', 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Remove', 'getRemove2Service', false],
        ], [
            'domainArticle' => 'TYannis\\SDS\\Domain\\Blog\\Entity\\Article',
            'presenter' => 'App\\UserInterface\\Presenter\\Article\\RemovePresenter',
            'remove' => 'TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Remove',
        ]);
    }

    /**
     * Gets the private 'App\Infrastructure\Adapter\Provider\MailProvider' shared autowired service.
     *
     * @return \App\Infrastructure\Adapter\Provider\MailProvider
     */
    protected function getMailProviderService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\Provider\\MailProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Adapter\\Provider\\MailProvider.php';

        return $this->privates['App\\Infrastructure\\Adapter\\Provider\\MailProvider'] = new \App\Infrastructure\Adapter\Provider\MailProvider(($this->services['messenger.default_bus'] ?? $this->getMessenger_DefaultBusService()), 'no-reply@ma-salle.com', 'Ma Salle');
    }

    /**
     * Gets the private 'App\Infrastructure\Adapter\Repository\ArticleRepository' shared autowired service.
     *
     * @return \App\Infrastructure\Adapter\Repository\ArticleRepository
     */
    protected function getArticleRepositoryService()
    {
        return $this->privates['App\\Infrastructure\\Adapter\\Repository\\ArticleRepository'] = new \App\Infrastructure\Adapter\Repository\ArticleRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Infrastructure\Adapter\Repository\CategoryRepository' shared autowired service.
     *
     * @return \App\Infrastructure\Adapter\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        return $this->privates['App\\Infrastructure\\Adapter\\Repository\\CategoryRepository'] = new \App\Infrastructure\Adapter\Repository\CategoryRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Infrastructure\Adapter\Repository\RoleRepository' shared autowired service.
     *
     * @return \App\Infrastructure\Adapter\Repository\RoleRepository
     */
    protected function getRoleRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\Gateway\\RoleGateway.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Adapter\\Repository\\RoleRepository.php';

        return $this->privates['App\\Infrastructure\\Adapter\\Repository\\RoleRepository'] = new \App\Infrastructure\Adapter\Repository\RoleRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Infrastructure\Adapter\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Infrastructure\Adapter\Repository\UserRepository
     */
    protected function getUserRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\Gateway\\UserGateway.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Adapter\\Repository\\UserRepository.php';

        return $this->privates['App\\Infrastructure\\Adapter\\Repository\\UserRepository'] = new \App\Infrastructure\Adapter\Repository\UserRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Infrastructure\Doctrine\DataFixtures\ArticleFixtures' shared autowired service.
     *
     * @return \App\Infrastructure\Doctrine\DataFixtures\ArticleFixtures
     */
    protected function getArticleFixturesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Fixture.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Doctrine\\DataFixtures\\ArticleFixtures.php';

        return $this->privates['App\\Infrastructure\\Doctrine\\DataFixtures\\ArticleFixtures'] = new \App\Infrastructure\Doctrine\DataFixtures\ArticleFixtures();
    }

    /**
     * Gets the private 'App\Infrastructure\Doctrine\DataFixtures\UserFixtures' shared autowired service.
     *
     * @return \App\Infrastructure\Doctrine\DataFixtures\UserFixtures
     */
    protected function getUserFixturesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Fixture.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Doctrine\\DataFixtures\\UserFixtures.php';

        return $this->privates['App\\Infrastructure\\Doctrine\\DataFixtures\\UserFixtures'] = new \App\Infrastructure\Doctrine\DataFixtures\UserFixtures();
    }

    /**
     * Gets the private 'App\Infrastructure\EventListener\ExceptionListener' shared autowired service.
     *
     * @return \App\Infrastructure\EventListener\ExceptionListener
     */
    protected function getExceptionListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\EventListener\\ExceptionListener.php';

        return $this->privates['App\\Infrastructure\\EventListener\\ExceptionListener'] = new \App\Infrastructure\EventListener\ExceptionListener(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'App\Infrastructure\ParamConverter\ArticleConverter' shared autowired service.
     *
     * @return \App\Infrastructure\ParamConverter\ArticleConverter
     */
    protected function getArticleConverterService()
    {
        return $this->privates['App\\Infrastructure\\ParamConverter\\ArticleConverter'] = new \App\Infrastructure\ParamConverter\ArticleConverter(($this->privates['App\\Infrastructure\\Adapter\\Repository\\ArticleRepository'] ?? $this->getArticleRepositoryService()));
    }

    /**
     * Gets the private 'App\Infrastructure\ParamConverter\CategoryConverter' shared autowired service.
     *
     * @return \App\Infrastructure\ParamConverter\CategoryConverter
     */
    protected function getCategoryConverterService()
    {
        return $this->privates['App\\Infrastructure\\ParamConverter\\CategoryConverter'] = new \App\Infrastructure\ParamConverter\CategoryConverter(($this->privates['App\\Infrastructure\\Adapter\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()));
    }

    /**
     * Gets the private 'App\Infrastructure\Security\Guard\WebAuthenticator' shared autowired service.
     *
     * @return \App\Infrastructure\Security\Guard\WebAuthenticator
     */
    protected function getWebAuthenticatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Authenticator\\AbstractFormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\Presenter\\LoginPresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Security\\Guard\\WebAuthenticator.php';

        return $this->privates['App\\Infrastructure\\Security\\Guard\\WebAuthenticator'] = new \App\Infrastructure\Security\Guard\WebAuthenticator(($this->privates['TYannis\\SDS\\Domain\\Security\\UseCase\\Login'] ?? $this->getLoginService()), ($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'App\Infrastructure\Security\Provider\UserProvider' shared autowired service.
     *
     * @return \App\Infrastructure\Security\Provider\UserProvider
     */
    protected function getUserProviderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Security\\Provider\\UserProvider.php';

        return $this->privates['App\\Infrastructure\\Security\\Provider\\UserProvider'] = new \App\Infrastructure\Security\Provider\UserProvider(($this->privates['App\\Infrastructure\\Adapter\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()));
    }

    /**
     * Gets the private 'App\Infrastructure\Validator\NonUniqueEmailValidator' shared autowired service.
     *
     * @return \App\Infrastructure\Validator\NonUniqueEmailValidator
     */
    protected function getNonUniqueEmailValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Validator\\NonUniqueEmailValidator.php';

        return $this->privates['App\\Infrastructure\\Validator\\NonUniqueEmailValidator'] = new \App\Infrastructure\Validator\NonUniqueEmailValidator(($this->privates['App\\Infrastructure\\Adapter\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()));
    }

    /**
     * Gets the private 'App\Infrastructure\Validator\NonUniquePseudoValidator' shared autowired service.
     *
     * @return \App\Infrastructure\Validator\NonUniquePseudoValidator
     */
    protected function getNonUniquePseudoValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Validator\\NonUniquePseudoValidator.php';

        return $this->privates['App\\Infrastructure\\Validator\\NonUniquePseudoValidator'] = new \App\Infrastructure\Validator\NonUniquePseudoValidator(($this->privates['App\\Infrastructure\\Adapter\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()));
    }

    /**
     * Gets the private 'App\UserInterface\Form\ArticleType' shared autowired service.
     *
     * @return \App\UserInterface\Form\ArticleType
     */
    protected function getArticleTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Form\\ArticleType.php';

        return $this->privates['App\\UserInterface\\Form\\ArticleType'] = new \App\UserInterface\Form\ArticleType();
    }

    /**
     * Gets the private 'App\UserInterface\Form\CategoryType' shared autowired service.
     *
     * @return \App\UserInterface\Form\CategoryType
     */
    protected function getCategoryTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Form\\CategoryType.php';

        return $this->privates['App\\UserInterface\\Form\\CategoryType'] = new \App\UserInterface\Form\CategoryType();
    }

    /**
     * Gets the private 'App\UserInterface\Form\RecoverPasswordType' shared autowired service.
     *
     * @return \App\UserInterface\Form\RecoverPasswordType
     */
    protected function getRecoverPasswordTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Form\\RecoverPasswordType.php';

        return $this->privates['App\\UserInterface\\Form\\RecoverPasswordType'] = new \App\UserInterface\Form\RecoverPasswordType();
    }

    /**
     * Gets the private 'App\UserInterface\Form\RegistrationType' shared autowired service.
     *
     * @return \App\UserInterface\Form\RegistrationType
     */
    protected function getRegistrationTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Form\\RegistrationType.php';

        return $this->privates['App\\UserInterface\\Form\\RegistrationType'] = new \App\UserInterface\Form\RegistrationType();
    }

    /**
     * Gets the private 'App\UserInterface\Form\ResetPasswordType' shared autowired service.
     *
     * @return \App\UserInterface\Form\ResetPasswordType
     */
    protected function getResetPasswordTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Form\\ResetPasswordType.php';

        return $this->privates['App\\UserInterface\\Form\\ResetPasswordType'] = new \App\UserInterface\Form\ResetPasswordType();
    }

    /**
     * Gets the private 'App\UserInterface\Form\RoleType' shared autowired service.
     *
     * @return \App\UserInterface\Form\RoleType
     */
    protected function getRoleTypeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Form\\RoleType.php';

        return $this->privates['App\\UserInterface\\Form\\RoleType'] = new \App\UserInterface\Form\RoleType();
    }

    /**
     * Gets the private 'App\UserInterface\Presenter\Article\CreatePresenter' shared autowired service.
     *
     * @return \App\UserInterface\Presenter\Article\CreatePresenter
     */
    protected function getCreatePresenter3Service()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\Presenter\\Article\\CreatePresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Presenter\\Article\\CreatePresenter.php';

        return $this->privates['App\\UserInterface\\Presenter\\Article\\CreatePresenter'] = new \App\UserInterface\Presenter\Article\CreatePresenter(($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'App\UserInterface\Presenter\Article\RemovePresenter' shared autowired service.
     *
     * @return \App\UserInterface\Presenter\Article\RemovePresenter
     */
    protected function getRemovePresenter2Service()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\Presenter\\Article\\RemovePresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Presenter\\Article\\RemovePresenter.php';

        return $this->privates['App\\UserInterface\\Presenter\\Article\\RemovePresenter'] = new \App\UserInterface\Presenter\Article\RemovePresenter(($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'App\UserInterface\Presenter\Article\UpdatePresenter' shared autowired service.
     *
     * @return \App\UserInterface\Presenter\Article\UpdatePresenter
     */
    protected function getUpdatePresenterService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\Presenter\\Article\\UpdatePresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Presenter\\Article\\UpdatePresenter.php';

        return $this->privates['App\\UserInterface\\Presenter\\Article\\UpdatePresenter'] = new \App\UserInterface\Presenter\Article\UpdatePresenter(($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'App\UserInterface\Presenter\Category\CreatePresenter' shared autowired service.
     *
     * @return \App\UserInterface\Presenter\Category\CreatePresenter
     */
    protected function getCreatePresenterService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\Presenter\\Category\\CreatePresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Presenter\\Category\\CreatePresenter.php';

        return $this->privates['App\\UserInterface\\Presenter\\Category\\CreatePresenter'] = new \App\UserInterface\Presenter\Category\CreatePresenter(($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'App\UserInterface\Presenter\Category\RemovePresenter' shared autowired service.
     *
     * @return \App\UserInterface\Presenter\Category\RemovePresenter
     */
    protected function getRemovePresenterService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\Presenter\\Category\\RemovePresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Presenter\\Category\\RemovePresenter.php';

        return $this->privates['App\\UserInterface\\Presenter\\Category\\RemovePresenter'] = new \App\UserInterface\Presenter\Category\RemovePresenter(($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'App\UserInterface\Presenter\Category\UpdatePresenter' shared autowired service.
     *
     * @return \App\UserInterface\Presenter\Category\UpdatePresenter
     */
    protected function getUpdatePresenter2Service()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\Presenter\\Category\\UpdatePresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Presenter\\Category\\UpdatePresenter.php';

        return $this->privates['App\\UserInterface\\Presenter\\Category\\UpdatePresenter'] = new \App\UserInterface\Presenter\Category\UpdatePresenter(($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'App\UserInterface\Presenter\RegistrationPresenter' shared autowired service.
     *
     * @return \App\UserInterface\Presenter\RegistrationPresenter
     */
    protected function getRegistrationPresenterService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\Presenter\\RegistrationPresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Presenter\\RegistrationPresenter.php';

        return $this->privates['App\\UserInterface\\Presenter\\RegistrationPresenter'] = new \App\UserInterface\Presenter\RegistrationPresenter(($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'App\UserInterface\Presenter\Security\AskPasswordResetPresenter' shared autowired service.
     *
     * @return \App\UserInterface\Presenter\Security\AskPasswordResetPresenter
     */
    protected function getAskPasswordResetPresenterService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\Presenter\\AskPasswordResetPresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Presenter\\Security\\AskPasswordResetPresenter.php';

        return $this->privates['App\\UserInterface\\Presenter\\Security\\AskPasswordResetPresenter'] = new \App\UserInterface\Presenter\Security\AskPasswordResetPresenter(($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'App\UserInterface\Presenter\Security\RecoverPasswordPresenter' shared autowired service.
     *
     * @return \App\UserInterface\Presenter\Security\RecoverPasswordPresenter
     */
    protected function getRecoverPasswordPresenterService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\Presenter\\RecoverPasswordPresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Presenter\\Security\\RecoverPasswordPresenter.php';

        return $this->privates['App\\UserInterface\\Presenter\\Security\\RecoverPasswordPresenter'] = new \App\UserInterface\Presenter\Security\RecoverPasswordPresenter(($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'App\UserInterface\Presenter\Security\Role\CreatePresenter' shared autowired service.
     *
     * @return \App\UserInterface\Presenter\Security\Role\CreatePresenter
     */
    protected function getCreatePresenter2Service()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\Presenter\\Role\\CreatePresenterInterface.php';
        include_once \dirname(__DIR__, 4).'\\src\\UserInterface\\Presenter\\Security\\Role\\CreatePresenter.php';

        return $this->privates['App\\UserInterface\\Presenter\\Security\\Role\\CreatePresenter'] = new \App\UserInterface\Presenter\Security\Role\CreatePresenter(($this->privates['session.flash_bag'] ?? $this->getSession_FlashBagService()));
    }

    /**
     * Gets the private 'Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider
     */
    protected function getManagerRegistryAwareConnectionProviderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\ConnectionProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Dbal\\ManagerRegistryAwareConnectionProvider.php';

        return $this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] = new \Doctrine\Bundle\DoctrineBundle\Dbal\ManagerRegistryAwareConnectionProvider(new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default'));
    }

    /**
     * Gets the private 'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand' shared service.
     *
     * @return \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand
     */
    protected function getRunSqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand.php';

        $this->privates['Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand'] = $instance = new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(($this->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] ?? $this->getManagerRegistryAwareConnectionProviderService()));

        $instance->setName('dbal:run-sql');

        return $instance;
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Blog\Entity\Article' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Blog\Entity\Article
     */
    protected function getArticleService()
    {
        $this->throw('Cannot autowire service "TYannis\\SDS\\Domain\\Blog\\Entity\\Article": argument "$id" of method "__construct()" references interface "Ramsey\\Uuid\\UuidInterface" but no such service exists. Did you create a class that implements this interface?');
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Blog\Entity\Category' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Blog\Entity\Category
     */
    protected function getCategoryService()
    {
        $this->throw('Cannot autowire service "TYannis\\SDS\\Domain\\Blog\\Entity\\Category": argument "$id" of method "__construct()" references interface "Ramsey\\Uuid\\UuidInterface" but no such service exists. Did you create a class that implements this interface?');
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Blog\UseCase\Article\Listing' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Blog\UseCase\Article\Listing
     */
    protected function getListingService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\UseCase\\Article\\Listing.php';

        return $this->privates['TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Listing'] = new \TYannis\SDS\Domain\Blog\UseCase\Article\Listing(($this->privates['App\\Infrastructure\\Adapter\\Repository\\ArticleRepository'] ?? $this->getArticleRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Blog\UseCase\Article\Remove' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Blog\UseCase\Article\Remove
     */
    protected function getRemove2Service()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\UseCase\\Article\\Remove.php';

        return $this->privates['TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Remove'] = new \TYannis\SDS\Domain\Blog\UseCase\Article\Remove(($this->privates['App\\Infrastructure\\Adapter\\Repository\\ArticleRepository'] ?? $this->getArticleRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Blog\UseCase\Article\Update' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Blog\UseCase\Article\Update
     */
    protected function getUpdateService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\UseCase\\Article\\Update.php';

        return $this->privates['TYannis\\SDS\\Domain\\Blog\\UseCase\\Article\\Update'] = new \TYannis\SDS\Domain\Blog\UseCase\Article\Update(($this->privates['App\\Infrastructure\\Adapter\\Repository\\ArticleRepository'] ?? $this->getArticleRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Blog\UseCase\Category\Create' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Blog\UseCase\Category\Create
     */
    protected function getCreateService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\UseCase\\Category\\Create.php';

        return $this->privates['TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Create'] = new \TYannis\SDS\Domain\Blog\UseCase\Category\Create(($this->privates['App\\Infrastructure\\Adapter\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Blog\UseCase\Category\Listing' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Blog\UseCase\Category\Listing
     */
    protected function getListing2Service()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\UseCase\\Category\\Listing.php';

        return $this->privates['TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Listing'] = new \TYannis\SDS\Domain\Blog\UseCase\Category\Listing(($this->privates['App\\Infrastructure\\Adapter\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Blog\UseCase\Category\Remove' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Blog\UseCase\Category\Remove
     */
    protected function getRemoveService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\UseCase\\Category\\Remove.php';

        return $this->privates['TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Remove'] = new \TYannis\SDS\Domain\Blog\UseCase\Category\Remove(($this->privates['App\\Infrastructure\\Adapter\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Blog\UseCase\Category\Update' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Blog\UseCase\Category\Update
     */
    protected function getUpdate2Service()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Blog\\UseCase\\Category\\Update.php';

        return $this->privates['TYannis\\SDS\\Domain\\Blog\\UseCase\\Category\\Update'] = new \TYannis\SDS\Domain\Blog\UseCase\Category\Update(($this->privates['App\\Infrastructure\\Adapter\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Security\UseCase\AskPasswordReset' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Security\UseCase\AskPasswordReset
     */
    protected function getAskPasswordResetService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\UseCase\\AskPasswordReset.php';

        return $this->privates['TYannis\\SDS\\Domain\\Security\\UseCase\\AskPasswordReset'] = new \TYannis\SDS\Domain\Security\UseCase\AskPasswordReset(($this->privates['App\\Infrastructure\\Adapter\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()), ($this->privates['App\\Infrastructure\\Adapter\\Provider\\MailProvider'] ?? $this->getMailProviderService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Security\UseCase\Login' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Security\UseCase\Login
     */
    protected function getLoginService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\UseCase\\Login.php';

        return $this->privates['TYannis\\SDS\\Domain\\Security\\UseCase\\Login'] = new \TYannis\SDS\Domain\Security\UseCase\Login(($this->privates['App\\Infrastructure\\Adapter\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Security\UseCase\RecoverPassword' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Security\UseCase\RecoverPassword
     */
    protected function getRecoverPasswordService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\UseCase\\RecoverPassword.php';

        return $this->privates['TYannis\\SDS\\Domain\\Security\\UseCase\\RecoverPassword'] = new \TYannis\SDS\Domain\Security\UseCase\RecoverPassword(($this->privates['App\\Infrastructure\\Adapter\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Security\UseCase\Registration' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Security\UseCase\Registration
     */
    protected function getRegistrationService()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\UseCase\\Registration.php';

        return $this->privates['TYannis\\SDS\\Domain\\Security\\UseCase\\Registration'] = new \TYannis\SDS\Domain\Security\UseCase\Registration(($this->privates['App\\Infrastructure\\Adapter\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Security\UseCase\Role\Create' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Security\UseCase\Role\Create
     */
    protected function getCreate2Service()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\UseCase\\Role\\Create.php';

        return $this->privates['TYannis\\SDS\\Domain\\Security\\UseCase\\Role\\Create'] = new \TYannis\SDS\Domain\Security\UseCase\Role\Create(($this->privates['App\\Infrastructure\\Adapter\\Repository\\RoleRepository'] ?? $this->getRoleRepositoryService()));
    }

    /**
     * Gets the private 'TYannis\SDS\Domain\Security\UseCase\User\Listing' shared autowired service.
     *
     * @return \TYannis\SDS\Domain\Security\UseCase\User\Listing
     */
    protected function getListing3Service()
    {
        include_once \dirname(__DIR__, 4).'\\domain\\src\\Security\\UseCase\\User\\Listing.php';

        return $this->privates['TYannis\\SDS\\Domain\\Security\\UseCase\\User\\Listing'] = new \TYannis\SDS\Domain\Security\UseCase\User\Listing(($this->privates['App\\Infrastructure\\Adapter\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()));
    }

    /**
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Traits\\ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\cache\\Adapter\\PhpArrayAdapter.php';

        return $this->privates['annotations.cache'] = new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /**
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AnnotationsCacheWarmer.php';

        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', true);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->privates['annotations.cache'] ?? $this->getAnnotations_CacheService()), true);
    }

    /**
     * Gets the private 'annotations.dummy_registry' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationRegistry
     */
    protected function getAnnotations_DummyRegistryService()
    {
        $this->privates['annotations.dummy_registry'] = $instance = new \Doctrine\Common\Annotations\AnnotationRegistry();

        $instance->registerUniqueLoader('class_exists');

        return $instance;
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', ($this->privates['annotations.dummy_registry'] ?? $this->getAnnotations_DummyRegistryService()));

        return $instance;
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.annotations.recorder_inner'] ?? $this->getCache_Annotations_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.annotations.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Annotations_RecorderInnerService()
    {
        return $this->privates['cache.annotations.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('qGtti8xPY7', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'cache.app.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_App_RecorderInnerService()
    {
        $this->privates['cache.app.recorder_inner'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('F3hwprBlls', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'cache.default_marshaller' shared service.
     *
     * @return \Symfony\Component\Cache\Marshaller\DefaultMarshaller
     */
    protected function getCache_DefaultMarshallerService()
    {
        return $this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL);
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->privates['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.doctrine.orm.default.metadata.recorder_inner'] ?? ($this->privates['cache.doctrine.orm.default.metadata.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.metadata.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_Metadata_RecorderInnerService()
    {
        return $this->privates['cache.doctrine.orm.default.metadata.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.doctrine.orm.default.query.recorder_inner'] ?? ($this->privates['cache.doctrine.orm.default.query.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_Query_RecorderInnerService()
    {
        return $this->privates['cache.doctrine.orm.default.query.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.doctrine.orm.default.result.recorder_inner'] ?? ($this->privates['cache.doctrine.orm.default.result.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_Result_RecorderInnerService()
    {
        return $this->privates['cache.doctrine.orm.default.result.recorder_inner'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.messenger.restart_workers_signal' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Messenger_RestartWorkersSignalService()
    {
        return $this->privates['cache.messenger.restart_workers_signal'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.messenger.restart_workers_signal.recorder_inner'] ?? $this->getCache_Messenger_RestartWorkersSignal_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.messenger.restart_workers_signal.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_Messenger_RestartWorkersSignal_RecorderInnerService()
    {
        $this->privates['cache.messenger.restart_workers_signal.recorder_inner'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('vvK77f5Fvq', 0, ($this->targetDir.''.'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'cache.property_access' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_PropertyAccessService()
    {
        return $this->privates['cache.property_access'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false);
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.property_info.recorder_inner'] ?? $this->getCache_PropertyInfo_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.property_info.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_PropertyInfo_RecorderInnerService()
    {
        return $this->privates['cache.property_info.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('vwFOtNwh0a', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.security_expression_language.recorder_inner'] ?? $this->getCache_SecurityExpressionLanguage_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.security_expression_language.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_SecurityExpressionLanguage_RecorderInnerService()
    {
        return $this->privates['cache.security_expression_language.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('vwIWyfsHJg', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.serializer.recorder_inner'] ?? $this->getCache_Serializer_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.serializer.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Serializer_RecorderInnerService()
    {
        return $this->privates['cache.serializer.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('vRJ0ALOmIu', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'cache.system.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_System_RecorderInnerService()
    {
        return $this->privates['cache.system.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('+K2ALhho0e', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(($this->privates['cache.validator.recorder_inner'] ?? $this->getCache_Validator_RecorderInnerService()));
    }

    /**
     * Gets the private 'cache.validator.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Validator_RecorderInnerService()
    {
        return $this->privates['cache.validator.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('hGqJx+OZUA', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'chatter.messenger.chat_handler' shared service.
     *
     * @return \Symfony\Component\Notifier\Messenger\MessageHandler
     */
    protected function getChatter_Messenger_ChatHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Messenger\\MessageHandler.php';

        return $this->privates['chatter.messenger.chat_handler'] = new \Symfony\Component\Notifier\Messenger\MessageHandler(($this->privates['chatter.transports'] ?? $this->getChatter_TransportsService()));
    }

    /**
     * Gets the private 'chatter.transport_factory' shared service.
     *
     * @return \Symfony\Component\Notifier\Transport
     */
    protected function getChatter_TransportFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Transport.php';

        return $this->privates['chatter.transport_factory'] = new \Symfony\Component\Notifier\Transport(new RewindableGenerator(function () {
            yield 0 => ($this->privates['notifier.transport_factory.null'] ?? $this->getNotifier_TransportFactory_NullService());
        }, 1));
    }

    /**
     * Gets the private 'chatter.transports' shared service.
     *
     * @return \Symfony\Component\Notifier\Transport\Transports
     */
    protected function getChatter_TransportsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Transport\\TransportInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Transport\\Transports.php';

        return $this->privates['chatter.transports'] = ($this->privates['chatter.transport_factory'] ?? $this->getChatter_TransportFactoryService())->fromStrings([]);
    }

    /**
     * Gets the private 'config.resource.self_checking_resource_checker' shared service.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker
     */
    protected function getConfig_Resource_SelfCheckingResourceCheckerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Resource\\SelfCheckingResourceChecker.php';

        return $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CacheClearCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\filesystem\\Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearerService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.messenger.restart_workers_signal', 7 => 'cache.doctrine.orm.default.metadata', 8 => 'cache.doctrine.orm.default.result', 9 => 'cache.doctrine.orm.default.query', 10 => 'cache.security_expression_language']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService());
            yield 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService());
            yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService());
            yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService());
            yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService());
            yield 'cache.messenger.restart_workers_signal' => ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService());
            yield 'cache.doctrine.orm.default.metadata' => ($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService());
            yield 'cache.doctrine.orm.default.result' => ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService());
            yield 'cache.doctrine.orm.default.query' => ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService());
            yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService());
        }, 11));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Command\\DebugCommand.php';

        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\UserInterface\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\UserInterface\\Form\\ArticleType', 1 => 'App\\UserInterface\\Form\\CategoryType', 2 => 'App\\UserInterface\\Form\\RecoverPasswordType', 3 => 'App\\UserInterface\\Form\\RegistrationType', 4 => 'App\\UserInterface\\Form\\ResetPasswordType', 5 => 'App\\UserInterface\\Form\\RoleType', 6 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 7 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 8 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 9 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 6 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_consume_messages' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\ConsumeMessagesCommand
     */
    protected function getConsole_Command_MessengerConsumeMessagesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\ConsumeMessagesCommand.php';

        $this->privates['console.command.messenger_consume_messages'] = $instance = new \Symfony\Component\Messenger\Command\ConsumeMessagesCommand(($this->privates['messenger.routable_message_bus'] ?? $this->getMessenger_RoutableMessageBusService()), ($this->privates['messenger.receiver_locator'] ?? $this->getMessenger_ReceiverLocatorService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), [0 => 'mailer', 1 => 'failed']);

        $instance->setName('messenger:consume');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    protected function getConsole_Command_MessengerDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\DebugCommand.php';

        $this->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.default' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => [0 => 'mailer.messenger.message_handler', 1 => []]], 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => [0 => [0 => 'chatter.messenger.chat_handler', 1 => []]], 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => [0 => [0 => 'texter.messenger.sms_handler', 1 => []]]]]);

        $instance->setName('debug:messenger');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_failed_messages_remove' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\FailedMessagesRemoveCommand
     */
    protected function getConsole_Command_MessengerFailedMessagesRemoveService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\AbstractFailedMessagesCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\FailedMessagesRemoveCommand.php';

        $this->privates['console.command.messenger_failed_messages_remove'] = $instance = new \Symfony\Component\Messenger\Command\FailedMessagesRemoveCommand('failed', ($this->privates['messenger.transport.failed'] ?? $this->getMessenger_Transport_FailedService()));

        $instance->setName('messenger:failed:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_failed_messages_retry' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\FailedMessagesRetryCommand
     */
    protected function getConsole_Command_MessengerFailedMessagesRetryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\AbstractFailedMessagesCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\FailedMessagesRetryCommand.php';

        $this->privates['console.command.messenger_failed_messages_retry'] = $instance = new \Symfony\Component\Messenger\Command\FailedMessagesRetryCommand('failed', ($this->privates['messenger.transport.failed'] ?? $this->getMessenger_Transport_FailedService()), ($this->privates['messenger.routable_message_bus'] ?? $this->getMessenger_RoutableMessageBusService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        $instance->setName('messenger:failed:retry');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_failed_messages_show' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\FailedMessagesShowCommand
     */
    protected function getConsole_Command_MessengerFailedMessagesShowService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\AbstractFailedMessagesCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\FailedMessagesShowCommand.php';

        $this->privates['console.command.messenger_failed_messages_show'] = $instance = new \Symfony\Component\Messenger\Command\FailedMessagesShowCommand('failed', ($this->privates['messenger.transport.failed'] ?? $this->getMessenger_Transport_FailedService()));

        $instance->setName('messenger:failed:show');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_setup_transports' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\SetupTransportsCommand
     */
    protected function getConsole_Command_MessengerSetupTransportsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\SetupTransportsCommand.php';

        $this->privates['console.command.messenger_setup_transports'] = $instance = new \Symfony\Component\Messenger\Command\SetupTransportsCommand(($this->privates['messenger.receiver_locator'] ?? $this->getMessenger_ReceiverLocatorService()), [0 => 'mailer', 1 => 'failed']);

        $instance->setName('messenger:setup-transports');

        return $instance;
    }

    /**
     * Gets the private 'console.command.messenger_stop_workers' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\StopWorkersCommand
     */
    protected function getConsole_Command_MessengerStopWorkersService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Command\\StopWorkersCommand.php';

        $this->privates['console.command.messenger_stop_workers'] = $instance = new \Symfony\Component\Messenger\Command\StopWorkersCommand(($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()));

        $instance->setName('messenger:stop-workers');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\yaml\\Command\\LintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Command\\YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\EventListener\\ErrorListener.php';

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'console.suggest_missing_package_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber
     */
    protected function getConsole_SuggestMissingPackageSubscriberService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\EventListener\\SuggestMissingPackageSubscriber.php';

        return $this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber();
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'dama.doctrine.dbal.connection_factory' shared service.
     *
     * @return \DAMA\DoctrineTestBundle\Doctrine\DBAL\StaticConnectionFactory
     */
    protected function getDama_Doctrine_Dbal_ConnectionFactoryService()
    {
        return $this->privates['dama.doctrine.dbal.connection_factory'] = new \DAMA\DoctrineTestBundle\Doctrine\DBAL\StaticConnectionFactory(($this->privates['dama.doctrine.dbal.connection_factory.inner'] ?? $this->getDama_Doctrine_Dbal_ConnectionFactory_InnerService()));
    }

    /**
     * Gets the private 'dama.doctrine.dbal.connection_factory.inner' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDama_Doctrine_Dbal_ConnectionFactory_InnerService()
    {
        return $this->privates['dama.doctrine.dbal.connection_factory.inner'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($this->parameters['doctrine.dbal.connection_factory.types']);
    }

    /**
     * Gets the private 'data_collector.ajax' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector
     */
    protected function getDataCollector_AjaxService()
    {
        return $this->privates['data_collector.ajax'] = new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector();
    }

    /**
     * Gets the private 'data_collector.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DataCollector\CacheDataCollector
     */
    protected function getDataCollector_CacheService()
    {
        $this->privates['data_collector.cache'] = $instance = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();

        $instance->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $instance->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $instance->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $instance->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $instance->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $instance->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $instance->addInstance('cache.messenger.restart_workers_signal', ($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()));
        $instance->addInstance('cache.doctrine.orm.default.metadata', ($this->privates['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
        $instance->addInstance('cache.doctrine.orm.default.result', ($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $instance->addInstance('cache.doctrine.orm.default.query', ($this->privates['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $instance->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));

        return $instance;
    }

    /**
     * Gets the private 'data_collector.config' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector
     */
    protected function getDataCollector_ConfigService()
    {
        $this->privates['data_collector.config'] = $instance = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();

        if ($this->has('kernel')) {
            $instance->setKernel(($this->services['kernel'] ?? $this->get('kernel', 3)));
        }

        return $instance;
    }

    /**
     * Gets the private 'data_collector.doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector
     */
    protected function getDataCollector_DoctrineService()
    {
        $this->privates['data_collector.doctrine'] = $instance = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()), true);

        $instance->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        return $instance;
    }

    /**
     * Gets the private 'data_collector.events' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\EventDataCollector
     */
    protected function getDataCollector_EventsService()
    {
        return $this->privates['data_collector.events'] = new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'data_collector.exception' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector
     */
    protected function getDataCollector_ExceptionService()
    {
        return $this->privates['data_collector.exception'] = new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector();
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(($this->privates['data_collector.form.extractor'] ?? ($this->privates['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor())));
    }

    /**
     * Gets the private 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->privates['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the private 'data_collector.http_client' shared service.
     *
     * @return \Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector
     */
    protected function getDataCollector_HttpClientService()
    {
        $this->privates['data_collector.http_client'] = $instance = new \Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector();

        $instance->registerClient('http_client', ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()));

        return $instance;
    }

    /**
     * Gets the private 'data_collector.logger' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector
     */
    protected function getDataCollector_LoggerService()
    {
        return $this->privates['data_collector.logger'] = new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->targetDir.''.'/App_KernelTestDebugContainer'), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'data_collector.memory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector
     */
    protected function getDataCollector_MemoryService()
    {
        return $this->privates['data_collector.memory'] = new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector();
    }

    /**
     * Gets the private 'data_collector.messenger' shared service.
     *
     * @return \Symfony\Component\Messenger\DataCollector\MessengerDataCollector
     */
    protected function getDataCollector_MessengerService()
    {
        $this->privates['data_collector.messenger'] = $instance = new \Symfony\Component\Messenger\DataCollector\MessengerDataCollector();

        $instance->registerBus('messenger.bus.default', ($this->services['messenger.default_bus'] ?? $this->getMessenger_DefaultBusService()));

        return $instance;
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'data_collector.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector
     */
    protected function getDataCollector_SecurityService()
    {
        return $this->privates['data_collector.security'] = new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService()));
    }

    /**
     * Gets the private 'data_collector.time' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector
     */
    protected function getDataCollector_TimeService()
    {
        return $this->privates['data_collector.time'] = new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector(($this->services['kernel'] ?? $this->get('kernel', 3)), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'data_collector.twig' shared service.
     *
     * @return \Symfony\Bridge\Twig\DataCollector\TwigDataCollector
     */
    protected function getDataCollector_TwigService()
    {
        return $this->privates['data_collector.twig'] = new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'data_collector.validator' shared service.
     *
     * @return \Symfony\Component\Validator\DataCollector\ValidatorDataCollector
     */
    protected function getDataCollector_ValidatorService()
    {
        return $this->privates['data_collector.validator'] = new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->privates['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(($this->privates['debug.argument_resolver.inner'] ?? $this->getDebug_ArgumentResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\DefaultValueResolver.php';

        return $this->privates['debug.argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.default.inner'] ?? ($this->privates['debug.argument_resolver.default.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.default.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getDebug_ArgumentResolver_Default_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\DefaultValueResolver.php';

        return $this->privates['debug.argument_resolver.default.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver
     */
    protected function getDebug_ArgumentResolver_InnerService()
    {
        return $this->privates['debug.argument_resolver.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->getDebug_ArgumentResolver_RequestAttributeService());
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->getDebug_ArgumentResolver_RequestService());
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->getDebug_ArgumentResolver_SessionService());
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->getDebug_Security_UserValueResolverService());
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->getDebug_ArgumentResolver_ServiceService());
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->getDebug_ArgumentResolver_DefaultService());
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->getDebug_ArgumentResolver_VariadicService());
            yield 7 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->getDebug_ArgumentResolver_NotTaggedControllerService());
        }, 8));
    }

    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_NotTaggedControllerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';

        return $this->privates['debug.argument_resolver.not_tagged_controller'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.not_tagged_controller.inner'] ?? $this->getDebug_ArgumentResolver_NotTaggedController_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver
     */
    protected function getDebug_ArgumentResolver_NotTaggedController_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver.php';

        return $this->privates['debug.argument_resolver.not_tagged_controller.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver(($this->privates['.service_locator.pRFRkqt'] ?? $this->get_ServiceLocator_PRFRkqtService()));
    }

    /**
     * Gets the private 'debug.argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestValueResolver.php';

        return $this->privates['debug.argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.request.inner'] ?? ($this->privates['debug.argument_resolver.request.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getDebug_ArgumentResolver_Request_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestValueResolver.php';

        return $this->privates['debug.argument_resolver.request.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestAttributeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver.php';

        return $this->privates['debug.argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.request_attribute.inner'] ?? ($this->privates['debug.argument_resolver.request_attribute.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request_attribute.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestAttribute_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver.php';

        return $this->privates['debug.argument_resolver.request_attribute.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';

        return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.service.inner'] ?? $this->getDebug_ArgumentResolver_Service_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.service.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getDebug_ArgumentResolver_Service_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

        return $this->privates['debug.argument_resolver.service.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator.pRFRkqt'] ?? $this->get_ServiceLocator_PRFRkqtService()));
    }

    /**
     * Gets the private 'debug.argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_SessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\SessionValueResolver.php';

        return $this->privates['debug.argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.session.inner'] ?? ($this->privates['debug.argument_resolver.session.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.session.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getDebug_ArgumentResolver_Session_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\SessionValueResolver.php';

        return $this->privates['debug.argument_resolver.session.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the private 'debug.argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_VariadicService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\VariadicValueResolver.php';

        return $this->privates['debug.argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.argument_resolver.variadic.inner'] ?? ($this->privates['debug.argument_resolver.variadic.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.variadic.inner' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getDebug_ArgumentResolver_Variadic_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\VariadicValueResolver.php';

        return $this->privates['debug.argument_resolver.variadic.inner'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->privates['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(($this->privates['debug.controller_resolver.inner'] ?? $this->getDebug_ControllerResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.controller_resolver.inner' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getDebug_ControllerResolver_InnerService()
    {
        return $this->privates['debug.controller_resolver.inner'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.event_dispatcher.inner' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getDebug_EventDispatcher_InnerService()
    {
        return $this->privates['debug.event_dispatcher.inner'] = new \Symfony\Component\EventDispatcher\EventDispatcher();
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->getDebug_FileLinkFormatter_UrlFormatService());
        });
    }

    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    protected function getDebug_FileLinkFormatter_UrlFormatService()
    {
        return $this->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat(($this->services['router'] ?? $this->getRouterService()), '_profiler_open_file', '?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(($this->privates['debug.security.access.decision_manager.inner'] ?? $this->getDebug_Security_Access_DecisionManager_InnerService()));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager.inner' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManager_InnerService()
    {
        return $this->privates['debug.security.access.decision_manager.inner'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->getDebug_Security_Voter_Security_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['debug.security.voter.security.access.simple_role_voter'] ?? $this->getDebug_Security_Voter_Security_Access_SimpleRoleVoterService());
        }, 2), 'affirmative', false, true);
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'debug.security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_Security_UserValueResolverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\TraceableValueResolver.php';

        return $this->privates['debug.security.user_value_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(($this->privates['debug.security.user_value_resolver.inner'] ?? $this->getDebug_Security_UserValueResolver_InnerService()), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.security.user_value_resolver.inner' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    protected function getDebug_Security_UserValueResolver_InnerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Controller\\UserValueResolver.php';

        return $this->privates['debug.security.user_value_resolver.inner'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';

        return $this->privates['debug.security.voter.security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['security.access.authenticated_voter'] ?? $this->getSecurity_Access_AuthenticatedVoterService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.simple_role_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_SimpleRoleVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\RoleVoter.php';

        return $this->privates['debug.security.voter.security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['security.access.simple_role_voter'] ?? ($this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.vote_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\VoteListener
     */
    protected function getDebug_Security_Voter_VoteListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\EventListener\\VoteListener.php';

        return $this->privates['debug.security.voter.vote_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\VoteListener(($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'debug.traced.messenger.bus.default.inner' shared service.
     *
     * @return \Symfony\Component\Messenger\MessageBus
     */
    protected function getDebug_Traced_Messenger_Bus_Default_InnerService()
    {
        return $this->privates['debug.traced.messenger.bus.default.inner'] = new \Symfony\Component\Messenger\MessageBus(new RewindableGenerator(function () {
            yield 0 => ($this->privates['messenger.bus.default.middleware.traceable'] ?? $this->getMessenger_Bus_Default_Middleware_TraceableService());
            yield 1 => ($this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] ?? ($this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] = new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('messenger.bus.default')));
            yield 2 => ($this->privates['messenger.middleware.reject_redelivered_message_middleware'] ?? ($this->privates['messenger.middleware.reject_redelivered_message_middleware'] = new \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware()));
            yield 3 => ($this->privates['messenger.middleware.dispatch_after_current_bus'] ?? ($this->privates['messenger.middleware.dispatch_after_current_bus'] = new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware()));
            yield 4 => ($this->privates['messenger.middleware.failed_message_processing_middleware'] ?? ($this->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware()));
            yield 5 => ($this->privates['messenger.middleware.send_message'] ?? $this->getMessenger_Middleware_SendMessageService());
            yield 6 => ($this->privates['messenger.bus.default.middleware.handle_message'] ?? $this->getMessenger_Bus_Default_Middleware_HandleMessageService());
        }, 7));
    }

    /**
     * Gets the private 'debug.validator.inner' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getDebug_Validator_InnerService()
    {
        return $this->privates['debug.validator.inner'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /**
     * Gets the private 'dependency_injection.config.container_parameters_resource_checker' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    protected function getDependencyInjection_Config_ContainerParametersResourceCheckerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\ResourceCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\Config\\ContainerParametersResourceChecker.php';

        return $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the private 'disallow_search_engine_index_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener
     */
    protected function getDisallowSearchEngineIndexResponseListenerService()
    {
        return $this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener();
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\MetadataCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\ResultCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\CollectionRegionDoctrineCommand.php';

        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\EntityRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryRegionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\CreateDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DropDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ImportDoctrineCommand.php';

        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.default_connection.configuration' shared service.
     *
     * @return \Doctrine\DBAL\Configuration
     */
    protected function getDoctrine_Dbal_DefaultConnection_ConfigurationService()
    {
        $this->privates['doctrine.dbal.default_connection.configuration'] = $instance = new \Doctrine\DBAL\Configuration();

        $instance->setSQLLogger(($this->privates['doctrine.dbal.logger.chain.default'] ?? $this->getDoctrine_Dbal_Logger_Chain_DefaultService()));

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.default_connection.event_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ContainerAwareEventManager
     */
    protected function getDoctrine_Dbal_DefaultConnection_EventManagerService()
    {
        $this->privates['doctrine.dbal.default_connection.event_manager'] = $instance = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));

        $instance->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.dbal.logger' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Logger\DbalLogger
     */
    protected function getDoctrine_Dbal_LoggerService()
    {
        return $this->privates['doctrine.dbal.logger'] = new \Symfony\Bridge\Doctrine\Logger\DbalLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'doctrine.dbal.logger.chain.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\LoggerChain
     */
    protected function getDoctrine_Dbal_Logger_Chain_DefaultService()
    {
        return $this->privates['doctrine.dbal.logger.chain.default'] = new \Doctrine\DBAL\Logging\LoggerChain([0 => ($this->privates['doctrine.dbal.logger'] ?? $this->getDoctrine_Dbal_LoggerService()), 1 => ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()))]);
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\EnsureProductionSettingsCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand.php';

        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.fixtures.loader' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader
     */
    protected function getDoctrine_Fixtures_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\DataFixtures\\ContainerAwareLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Loader\\SymfonyFixturesLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\SharedFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\data-fixtures\\lib\\Doctrine\\Common\\DataFixtures\\AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\ORMFixtureInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Fixture.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Doctrine\\DataFixtures\\ArticleFixtures.php';
        include_once \dirname(__DIR__, 4).'\\src\\Infrastructure\\Doctrine\\DataFixtures\\UserFixtures.php';

        $this->privates['doctrine.fixtures.loader'] = $instance = new \Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader($this);

        $instance->addFixtures([0 => ['fixture' => ($this->privates['App\\Infrastructure\\Doctrine\\DataFixtures\\ArticleFixtures'] ?? ($this->privates['App\\Infrastructure\\Doctrine\\DataFixtures\\ArticleFixtures'] = new \App\Infrastructure\Doctrine\DataFixtures\ArticleFixtures())), 'groups' => []], 1 => ['fixture' => ($this->privates['App\\Infrastructure\\Doctrine\\DataFixtures\\UserFixtures'] ?? ($this->privates['App\\Infrastructure\\Doctrine\\DataFixtures\\UserFixtures'] = new \App\Infrastructure\Doctrine\DataFixtures\UserFixtures())), 'groups' => []]]);

        return $instance;
    }

    /**
     * Gets the private 'doctrine.fixtures.purger.orm_purger_factory' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory
     */
    protected function getDoctrine_Fixtures_Purger_OrmPurgerFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Purger\\PurgerFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Purger\\ORMPurgerFactory.php';

        return $this->privates['doctrine.fixtures.purger.orm_purger_factory'] = new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory();
    }

    /**
     * Gets the private 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    protected function getDoctrine_FixturesLoadCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Command\\LoadDataFixturesDoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Purger\\PurgerFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle\\Purger\\ORMPurgerFactory.php';

        $this->privates['doctrine.fixtures_load_command'] = $instance = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand(($this->privates['doctrine.fixtures.loader'] ?? $this->getDoctrine_Fixtures_LoaderService()), ($this->services['doctrine'] ?? $this->getDoctrineService()), ['default' => ($this->privates['doctrine.fixtures.purger.orm_purger_factory'] ?? ($this->privates['doctrine.fixtures.purger.orm_purger_factory'] = new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory()))]);

        $instance->setName('doctrine:fixtures:load');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ConvertMappingCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ConvertMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\ImportMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\InfoCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\InfoDoctrineCommand.php';

        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()
    {
        return $this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
    }

    /**
     * Gets the private 'doctrine.orm.container_repository_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory
     */
    protected function getDoctrine_Orm_ContainerRepositoryFactoryService()
    {
        return $this->privates['doctrine.orm.container_repository_factory'] = new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Infrastructure\\Adapter\\Repository\\ArticleRepository' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\ArticleRepository', 'getArticleRepositoryService', false],
            'App\\Infrastructure\\Adapter\\Repository\\CategoryRepository' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\CategoryRepository', 'getCategoryRepositoryService', false],
            'App\\Infrastructure\\Adapter\\Repository\\RoleRepository' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\RoleRepository', 'getRoleRepositoryService', false],
            'App\\Infrastructure\\Adapter\\Repository\\UserRepository' => ['privates', 'App\\Infrastructure\\Adapter\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'App\\Infrastructure\\Adapter\\Repository\\ArticleRepository' => '?',
            'App\\Infrastructure\\Adapter\\Repository\\CategoryRepository' => '?',
            'App\\Infrastructure\\Adapter\\Repository\\RoleRepository' => '?',
            'App\\Infrastructure\\Adapter\\Repository\\UserRepository' => '?',
        ]));
    }

    /**
     * Gets the private 'doctrine.orm.default_annotation_metadata_driver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\AnnotationDriver
     */
    protected function getDoctrine_Orm_DefaultAnnotationMetadataDriverService()
    {
        return $this->privates['doctrine.orm.default_annotation_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'\\src\\Infrastructure\\Doctrine\\Entity')]);
    }

    /**
     * Gets the private 'doctrine.orm.default_configuration' shared service.
     *
     * @return \Doctrine\ORM\Configuration
     */
    protected function getDoctrine_Orm_DefaultConfigurationService()
    {
        $this->privates['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

        $instance->setEntityNamespaces(['App' => 'App\\Infrastructure\\Doctrine\\Entity']);
        $instance->setMetadataCacheImpl(($this->privates['doctrine.orm.default_metadata_cache'] ?? $this->getDoctrine_Orm_DefaultMetadataCacheService()));
        $instance->setQueryCacheImpl(($this->privates['doctrine.orm.default_query_cache'] ?? $this->getDoctrine_Orm_DefaultQueryCacheService()));
        $instance->setResultCacheImpl(($this->privates['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] ?? $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()));
        $instance->setMetadataDriverImpl(($this->privates['doctrine.orm.default_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultMetadataDriverService()));
        $instance->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $instance->setProxyNamespace('Proxies');
        $instance->setAutoGenerateProxyClasses(true);
        $instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $instance->setNamingStrategy(($this->privates['doctrine.orm.naming_strategy.underscore_number_aware'] ?? ($this->privates['doctrine.orm.naming_strategy.underscore_number_aware'] = new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true))));
        $instance->setQuoteStrategy(($this->privates['doctrine.orm.quote_strategy.default'] ?? ($this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy())));
        $instance->setEntityListenerResolver(($this->privates['doctrine.orm.default_entity_listener_resolver'] ?? ($this->privates['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this))));
        $instance->setRepositoryFactory(($this->privates['doctrine.orm.container_repository_factory'] ?? $this->getDoctrine_Orm_ContainerRepositoryFactoryService()));

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->privates['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this);
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\PropertyInfo\\DoctrineExtractor.php';

        return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.validator_loader' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineLoader
     */
    protected function getDoctrine_Orm_DefaultEntityManager_ValidatorLoaderService()
    {
        return $this->privates['doctrine.orm.default_entity_manager.validator_loader'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL);
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\AttachEntityListenersListener.php';

        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->privates['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []);
    }

    /**
     * Gets the private 'doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \DAMA\DoctrineTestBundle\Doctrine\Cache\StaticArrayCache
     */
    protected function getDoctrine_Orm_DefaultMetadataCacheService()
    {
        $this->privates['doctrine.orm.default_metadata_cache'] = $instance = new \DAMA\DoctrineTestBundle\Doctrine\Cache\StaticArrayCache();

        $instance->setNamespace('587f9c1a84a2c77aac3086fb62c7450374000626');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.default_metadata_driver' shared service.
     *
     * @return \Doctrine\Persistence\Mapping\Driver\MappingDriverChain
     */
    protected function getDoctrine_Orm_DefaultMetadataDriverService()
    {
        $this->privates['doctrine.orm.default_metadata_driver'] = $instance = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $instance->addDriver(($this->privates['doctrine.orm.default_annotation_metadata_driver'] ?? $this->getDoctrine_Orm_DefaultAnnotationMetadataDriverService()), 'App\\Infrastructure\\Doctrine\\Entity');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.default_query_cache' shared service.
     *
     * @return \DAMA\DoctrineTestBundle\Doctrine\Cache\StaticArrayCache
     */
    protected function getDoctrine_Orm_DefaultQueryCacheService()
    {
        $this->privates['doctrine.orm.default_query_cache'] = $instance = new \DAMA\DoctrineTestBundle\Doctrine\Cache\StaticArrayCache();

        $instance->setNamespace('a0340e49ab711cf406922588df061b847421a1bf');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber
     */
    protected function getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Messenger\\DoctrineClearEntityManagerWorkerSubscriber.php';

        return $this->privates['doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager'] = new \Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.naming_strategy.underscore_number_aware' shared service.
     *
     * @return \Doctrine\ORM\Mapping\UnderscoreNamingStrategy
     */
    protected function getDoctrine_Orm_NamingStrategy_UnderscoreNumberAwareService()
    {
        return $this->privates['doctrine.orm.naming_strategy.underscore_number_aware'] = new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true);
    }

    /**
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\CacheWarmer\\ProxyCacheWarmer.php';

        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.quote_strategy.default' shared service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultQuoteStrategy
     */
    protected function getDoctrine_Orm_QuoteStrategy_DefaultService()
    {
        return $this->privates['doctrine.orm.quote_strategy.default'] = new \Doctrine\ORM\Mapping\DefaultQuoteStrategy();
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Validator\\Constraints\\UniqueEntityValidator.php';

        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->privates['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\RunDqlDoctrineCommand.php';

        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\RunSqlDoctrineCommand.php';

        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\CreateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\CreateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\DropCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\DropSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\UpdateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\ValidateSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\ValidateSchemaCommand.php';

        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.twig.doctrine_extension' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension
     */
    protected function getDoctrine_Twig_DoctrineExtensionService()
    {
        return $this->privates['doctrine.twig.doctrine_extension'] = new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension();
    }

    /**
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsDiffDoctrineCommand.php';

        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsDumpSchemaDoctrineCommand.php';

        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand();

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsExecuteDoctrineCommand.php';

        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsGenerateDoctrineCommand.php';

        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand();

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsLatestDoctrineCommand.php';

        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsMigrateDoctrineCommand.php';

        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsRollupDoctrineCommand.php';

        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand();

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsStatusDoctrineCommand.php';

        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand();

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsUpToDateDoctrineCommand.php';

        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand();

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsVersionDoctrineCommand.php';

        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /**
     * Gets the private 'enqueue.client.consume_command' shared service.
     *
     * @return \Enqueue\Symfony\Client\ConsumeCommand
     */
    protected function getEnqueue_Client_ConsumeCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Consumption\\LimitsExtensionsCommandTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Client\\SetupBrokerExtensionCommandTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Consumption\\QueueConsumerOptionsCommandTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Consumption\\ChooseLoggerCommandTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Client\\ConsumeCommand.php';

        $this->privates['enqueue.client.consume_command'] = $instance = new \Enqueue\Symfony\Client\ConsumeCommand(($this->privates['enqueue.locator'] ?? $this->getEnqueue_LocatorService()), 'default', 'enqueue.client.%s.queue_consumer', 'enqueue.client.%s.driver', 'enqueue.client.%s.delegate_processor');

        $instance->setName('enqueue:consume');

        return $instance;
    }

    /**
     * Gets the private 'enqueue.client.default.client_extensions' shared service.
     *
     * @return \Enqueue\Client\ChainExtension
     */
    protected function getEnqueue_Client_Default_ClientExtensionsService()
    {
        return $this->privates['enqueue.client.default.client_extensions'] = new \Enqueue\Client\ChainExtension([]);
    }

    /**
     * Gets the private 'enqueue.client.default.config' shared service.
     *
     * @return \Enqueue\Client\Config
     */
    protected function getEnqueue_Client_Default_ConfigService()
    {
        return $this->privates['enqueue.client.default.config'] = new \Enqueue\Client\Config('enqueue', '.', 'app', 'default', 'default', 'default', 'enqueue.client.default.router_processor', ['dsn' => 'null:'], []);
    }

    /**
     * Gets the private 'enqueue.client.default.consumption_extensions' shared service.
     *
     * @return \Enqueue\Consumption\ChainExtension
     */
    protected function getEnqueue_Client_Default_ConsumptionExtensionsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\StartExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PreSubscribeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PreConsumeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\MessageReceivedExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PostMessageReceivedExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\MessageResultExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\ProcessorExceptionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PostConsumeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\EndExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\InitLoggerExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\ChainExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\Extension\\ReplyExtension.php';

        return $this->privates['enqueue.client.default.consumption_extensions'] = new \Enqueue\Consumption\ChainExtension([0 => ($this->privates['enqueue.client.default.set_router_properties_extension'] ?? $this->getEnqueue_Client_Default_SetRouterPropertiesExtensionService()), 1 => ($this->privates['enqueue.client.default.exclusive_command_extension'] ?? $this->getEnqueue_Client_Default_ExclusiveCommandExtensionService()), 2 => ($this->privates['enqueue.consumption.reply_extension'] ?? ($this->privates['enqueue.consumption.reply_extension'] = new \Enqueue\Consumption\Extension\ReplyExtension())), 3 => ($this->privates['enqueue.client.default.flush_spool_producer_extension'] ?? $this->getEnqueue_Client_Default_FlushSpoolProducerExtensionService())]);
    }

    /**
     * Gets the private 'enqueue.client.default.context' shared service.
     *
     * @return \Interop\Queue\Context
     */
    protected function getEnqueue_Client_Default_ContextService()
    {
        return $this->privates['enqueue.client.default.context'] = ($this->privates['enqueue.client.default.driver'] ?? $this->getEnqueue_Client_Default_DriverService())->getContext();
    }

    /**
     * Gets the private 'enqueue.client.default.delegate_processor' shared service.
     *
     * @return \Enqueue\Client\DelegateProcessor
     */
    protected function getEnqueue_Client_Default_DelegateProcessorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\queue-interop\\queue-interop\\src\\Processor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\DelegateProcessor.php';

        return $this->privates['enqueue.client.default.delegate_processor'] = new \Enqueue\Client\DelegateProcessor(($this->privates['enqueue.client.default.processor_registry'] ?? $this->getEnqueue_Client_Default_ProcessorRegistryService()));
    }

    /**
     * Gets the private 'enqueue.client.default.driver' shared service.
     *
     * @return \Enqueue\Client\DriverInterface
     */
    protected function getEnqueue_Client_Default_DriverService()
    {
        return $this->privates['enqueue.client.default.driver'] = ($this->privates['enqueue.client.default.driver_factory.outer'] ?? $this->getEnqueue_Client_Default_DriverFactory_OuterService())->create(($this->privates['enqueue.transport.default.connection_factory'] ?? $this->getEnqueue_Transport_Default_ConnectionFactoryService()), ($this->privates['enqueue.client.default.config'] ?? $this->getEnqueue_Client_Default_ConfigService()), ($this->privates['enqueue.client.default.route_collection'] ?? $this->getEnqueue_Client_Default_RouteCollectionService()));
    }

    /**
     * Gets the private 'enqueue.client.default.driver_factory.inner' shared service.
     *
     * @return \Enqueue\Client\DriverFactory
     */
    protected function getEnqueue_Client_Default_DriverFactory_InnerService()
    {
        return $this->privates['enqueue.client.default.driver_factory.inner'] = new \Enqueue\Client\DriverFactory();
    }

    /**
     * Gets the private 'enqueue.client.default.driver_factory.outer' shared service.
     *
     * @return \Enqueue\Doctrine\DoctrineDriverFactory
     */
    protected function getEnqueue_Client_Default_DriverFactory_OuterService()
    {
        return $this->privates['enqueue.client.default.driver_factory.outer'] = new \Enqueue\Doctrine\DoctrineDriverFactory(($this->privates['enqueue.client.default.driver_factory.inner'] ?? ($this->privates['enqueue.client.default.driver_factory.inner'] = new \Enqueue\Client\DriverFactory())));
    }

    /**
     * Gets the private 'enqueue.client.default.exclusive_command_extension' shared service.
     *
     * @return \Enqueue\Client\ConsumptionExtension\ExclusiveCommandExtension
     */
    protected function getEnqueue_Client_Default_ExclusiveCommandExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\MessageReceivedExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\ConsumptionExtension\\ExclusiveCommandExtension.php';

        return $this->privates['enqueue.client.default.exclusive_command_extension'] = new \Enqueue\Client\ConsumptionExtension\ExclusiveCommandExtension(($this->privates['enqueue.client.default.driver'] ?? $this->getEnqueue_Client_Default_DriverService()));
    }

    /**
     * Gets the private 'enqueue.client.default.flush_spool_producer_extension' shared service.
     *
     * @return \Enqueue\Client\ConsumptionExtension\FlushSpoolProducerExtension
     */
    protected function getEnqueue_Client_Default_FlushSpoolProducerExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PostMessageReceivedExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\EndExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\ConsumptionExtension\\FlushSpoolProducerExtension.php';

        return $this->privates['enqueue.client.default.flush_spool_producer_extension'] = new \Enqueue\Client\ConsumptionExtension\FlushSpoolProducerExtension(($this->privates['enqueue.client.default.spool_producer'] ?? $this->getEnqueue_Client_Default_SpoolProducerService()));
    }

    /**
     * Gets the private 'enqueue.client.default.flush_spool_producer_listener' shared service.
     *
     * @return \Enqueue\Symfony\Client\FlushSpoolProducerListener
     */
    protected function getEnqueue_Client_Default_FlushSpoolProducerListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Client\\FlushSpoolProducerListener.php';

        return $this->privates['enqueue.client.default.flush_spool_producer_listener'] = new \Enqueue\Symfony\Client\FlushSpoolProducerListener(($this->privates['enqueue.client.default.spool_producer'] ?? $this->getEnqueue_Client_Default_SpoolProducerService()));
    }

    /**
     * Gets the private 'enqueue.client.default.lazy_producer' shared service.
     *
     * @return \Enqueue\Symfony\Client\LazyProducer
     */
    protected function getEnqueue_Client_Default_LazyProducerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Client\\LazyProducer.php';

        return $this->privates['enqueue.client.default.lazy_producer'] = new \Enqueue\Symfony\Client\LazyProducer(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'enqueue.client.default.producer' => ['services', 'enqueue.client.default.producer', 'getEnqueue_Client_Default_ProducerService', false],
        ], [
            'enqueue.client.default.producer' => '?',
        ]), 'enqueue.client.default.producer');
    }

    /**
     * Gets the private 'enqueue.client.default.processor_registry' shared service.
     *
     * @return \Enqueue\Symfony\ContainerProcessorRegistry
     */
    protected function getEnqueue_Client_Default_ProcessorRegistryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\ProcessorRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\ContainerProcessorRegistry.php';

        return $this->privates['enqueue.client.default.processor_registry'] = new \Enqueue\Symfony\ContainerProcessorRegistry((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'enqueue.client.default.router_processor' => ['privates', 'enqueue.client.default.router_processor', 'getEnqueue_Client_Default_RouterProcessorService', false],
        ], [
            'enqueue.client.default.router_processor' => '?',
        ]))->withContext('enqueue.client.default.processor_registry', $this));
    }

    /**
     * Gets the private 'enqueue.client.default.queue_consumer' shared service.
     *
     * @return \Enqueue\Consumption\QueueConsumer
     */
    protected function getEnqueue_Client_Default_QueueConsumerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\QueueConsumerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\QueueConsumer.php';

        return $this->privates['enqueue.client.default.queue_consumer'] = new \Enqueue\Consumption\QueueConsumer(($this->privates['enqueue.client.default.context'] ?? $this->getEnqueue_Client_Default_ContextService()), ($this->privates['enqueue.client.default.consumption_extensions'] ?? $this->getEnqueue_Client_Default_ConsumptionExtensionsService()), [], ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 10000);
    }

    /**
     * Gets the private 'enqueue.client.default.route_collection' shared service.
     *
     * @return \Enqueue\Client\RouteCollection
     */
    protected function getEnqueue_Client_Default_RouteCollectionService()
    {
        return $this->privates['enqueue.client.default.route_collection'] = \Enqueue\Client\RouteCollection::fromArray([]);
    }

    /**
     * Gets the private 'enqueue.client.default.router_processor' shared service.
     *
     * @return \Enqueue\Client\RouterProcessor
     */
    protected function getEnqueue_Client_Default_RouterProcessorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\queue-interop\\queue-interop\\src\\Processor.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\RouterProcessor.php';

        return $this->privates['enqueue.client.default.router_processor'] = new \Enqueue\Client\RouterProcessor(($this->privates['enqueue.client.default.driver'] ?? $this->getEnqueue_Client_Default_DriverService()));
    }

    /**
     * Gets the private 'enqueue.client.default.rpc_factory' shared service.
     *
     * @return \Enqueue\Rpc\RpcFactory
     */
    protected function getEnqueue_Client_Default_RpcFactoryService()
    {
        return $this->privates['enqueue.client.default.rpc_factory'] = new \Enqueue\Rpc\RpcFactory(($this->privates['enqueue.client.default.context'] ?? $this->getEnqueue_Client_Default_ContextService()));
    }

    /**
     * Gets the private 'enqueue.client.default.set_router_properties_extension' shared service.
     *
     * @return \Enqueue\Client\ConsumptionExtension\SetRouterPropertiesExtension
     */
    protected function getEnqueue_Client_Default_SetRouterPropertiesExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\MessageReceivedExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\ConsumptionExtension\\SetRouterPropertiesExtension.php';

        return $this->privates['enqueue.client.default.set_router_properties_extension'] = new \Enqueue\Client\ConsumptionExtension\SetRouterPropertiesExtension(($this->privates['enqueue.client.default.driver'] ?? $this->getEnqueue_Client_Default_DriverService()));
    }

    /**
     * Gets the private 'enqueue.client.default.spool_producer' shared service.
     *
     * @return \Enqueue\Client\SpoolProducer
     */
    protected function getEnqueue_Client_Default_SpoolProducerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Client\\SpoolProducer.php';

        return $this->privates['enqueue.client.default.spool_producer'] = new \Enqueue\Client\SpoolProducer(($this->privates['enqueue.client.default.lazy_producer'] ?? $this->getEnqueue_Client_Default_LazyProducerService()));
    }

    /**
     * Gets the private 'enqueue.client.default.traceable_producer.inner' shared service.
     *
     * @return \Enqueue\Client\Producer
     */
    protected function getEnqueue_Client_Default_TraceableProducer_InnerService()
    {
        return $this->privates['enqueue.client.default.traceable_producer.inner'] = new \Enqueue\Client\Producer(($this->privates['enqueue.client.default.driver'] ?? $this->getEnqueue_Client_Default_DriverService()), ($this->privates['enqueue.client.default.rpc_factory'] ?? $this->getEnqueue_Client_Default_RpcFactoryService()), ($this->privates['enqueue.client.default.client_extensions'] ?? ($this->privates['enqueue.client.default.client_extensions'] = new \Enqueue\Client\ChainExtension([]))));
    }

    /**
     * Gets the private 'enqueue.client.produce_command' shared service.
     *
     * @return \Enqueue\Symfony\Client\ProduceCommand
     */
    protected function getEnqueue_Client_ProduceCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Client\\ProduceCommand.php';

        $this->privates['enqueue.client.produce_command'] = $instance = new \Enqueue\Symfony\Client\ProduceCommand(($this->privates['enqueue.locator'] ?? $this->getEnqueue_LocatorService()), 'default', 'enqueue.client.%s.producer');

        $instance->setName('enqueue:produce');

        return $instance;
    }

    /**
     * Gets the private 'enqueue.client.routes_command' shared service.
     *
     * @return \Enqueue\Symfony\Client\RoutesCommand
     */
    protected function getEnqueue_Client_RoutesCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Client\\RoutesCommand.php';

        $this->privates['enqueue.client.routes_command'] = $instance = new \Enqueue\Symfony\Client\RoutesCommand(($this->privates['enqueue.locator'] ?? $this->getEnqueue_LocatorService()), 'default', 'enqueue.client.%s.driver');

        $instance->setName('enqueue:routes');

        return $instance;
    }

    /**
     * Gets the private 'enqueue.client.setup_broker_command' shared service.
     *
     * @return \Enqueue\Symfony\Client\SetupBrokerCommand
     */
    protected function getEnqueue_Client_SetupBrokerCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Client\\SetupBrokerCommand.php';

        $this->privates['enqueue.client.setup_broker_command'] = $instance = new \Enqueue\Symfony\Client\SetupBrokerCommand(($this->privates['enqueue.locator'] ?? $this->getEnqueue_LocatorService()), 'default', 'enqueue.client.%s.driver');

        $instance->setName('enqueue:setup-broker');

        return $instance;
    }

    /**
     * Gets the private 'enqueue.consumption.reply_extension' shared service.
     *
     * @return \Enqueue\Consumption\Extension\ReplyExtension
     */
    protected function getEnqueue_Consumption_ReplyExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PostMessageReceivedExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\Extension\\ReplyExtension.php';

        return $this->privates['enqueue.consumption.reply_extension'] = new \Enqueue\Consumption\Extension\ReplyExtension();
    }

    /**
     * Gets the private 'enqueue.locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getEnqueue_LocatorService()
    {
        return $this->privates['enqueue.locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'enqueue.client.default.delegate_processor' => ['privates', 'enqueue.client.default.delegate_processor', 'getEnqueue_Client_Default_DelegateProcessorService', false],
            'enqueue.client.default.driver' => ['privates', 'enqueue.client.default.driver', 'getEnqueue_Client_Default_DriverService', false],
            'enqueue.client.default.producer' => ['privates', 'enqueue.client.default.lazy_producer', 'getEnqueue_Client_Default_LazyProducerService', false],
            'enqueue.client.default.queue_consumer' => ['privates', 'enqueue.client.default.queue_consumer', 'getEnqueue_Client_Default_QueueConsumerService', false],
            'enqueue.transport.default.context' => ['privates', 'enqueue.transport.default.context', 'getEnqueue_Transport_Default_ContextService', false],
            'enqueue.transport.default.processor_registry' => ['privates', 'enqueue.transport.default.processor_registry', 'getEnqueue_Transport_Default_ProcessorRegistryService', false],
            'enqueue.transport.default.queue_consumer' => ['privates', 'enqueue.transport.default.queue_consumer', 'getEnqueue_Transport_Default_QueueConsumerService', false],
        ], [
            'enqueue.client.default.delegate_processor' => '?',
            'enqueue.client.default.driver' => '?',
            'enqueue.client.default.producer' => '?',
            'enqueue.client.default.queue_consumer' => '?',
            'enqueue.transport.default.context' => '?',
            'enqueue.transport.default.processor_registry' => '?',
            'enqueue.transport.default.queue_consumer' => '?',
        ]);
    }

    /**
     * Gets the private 'enqueue.messenger_transport.factory' shared service.
     *
     * @return \Enqueue\MessengerAdapter\QueueInteropTransportFactory
     */
    protected function getEnqueue_MessengerTransport_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\sroze\\messenger-enqueue-transport\\QueueInteropTransportFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Serialization\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Serialization\\PhpSerializer.php';

        return $this->privates['enqueue.messenger_transport.factory'] = new \Enqueue\MessengerAdapter\QueueInteropTransportFactory(($this->privates['messenger.transport.native_php_serializer'] ?? ($this->privates['messenger.transport.native_php_serializer'] = new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer())), ($this->privates['enqueue.locator'] ?? $this->getEnqueue_LocatorService()), true);
    }

    /**
     * Gets the private 'enqueue.profiler.message_queue_collector' shared service.
     *
     * @return \Enqueue\Bundle\Profiler\MessageQueueCollector
     */
    protected function getEnqueue_Profiler_MessageQueueCollectorService()
    {
        $this->privates['enqueue.profiler.message_queue_collector'] = $instance = new \Enqueue\Bundle\Profiler\MessageQueueCollector();

        $instance->addProducer('default', ($this->services['enqueue.client.default.producer'] ?? $this->getEnqueue_Client_Default_ProducerService()));

        return $instance;
    }

    /**
     * Gets the private 'enqueue.transport.consume_command' shared service.
     *
     * @return \Enqueue\Symfony\Consumption\ConfigurableConsumeCommand
     */
    protected function getEnqueue_Transport_ConsumeCommandService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Consumption\\LimitsExtensionsCommandTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Consumption\\QueueConsumerOptionsCommandTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Consumption\\ChooseLoggerCommandTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\Consumption\\ConfigurableConsumeCommand.php';

        $this->privates['enqueue.transport.consume_command'] = $instance = new \Enqueue\Symfony\Consumption\ConfigurableConsumeCommand(($this->privates['enqueue.locator'] ?? $this->getEnqueue_LocatorService()), 'default', 'enqueue.transport.%s.queue_consumer', 'enqueue.transport.%s.processor_registry');

        $instance->setName('enqueue:transport:consume');

        return $instance;
    }

    /**
     * Gets the private 'enqueue.transport.default.connection_factory' shared service.
     *
     * @return \Interop\Queue\ConnectionFactory
     */
    protected function getEnqueue_Transport_Default_ConnectionFactoryService()
    {
        return $this->privates['enqueue.transport.default.connection_factory'] = ($this->privates['enqueue.transport.default.connection_factory_factory.outer'] ?? $this->getEnqueue_Transport_Default_ConnectionFactoryFactory_OuterService())->create(['dsn' => 'null:']);
    }

    /**
     * Gets the private 'enqueue.transport.default.connection_factory_factory.inner' shared service.
     *
     * @return \Enqueue\ConnectionFactoryFactory
     */
    protected function getEnqueue_Transport_Default_ConnectionFactoryFactory_InnerService()
    {
        return $this->privates['enqueue.transport.default.connection_factory_factory.inner'] = new \Enqueue\ConnectionFactoryFactory();
    }

    /**
     * Gets the private 'enqueue.transport.default.connection_factory_factory.outer' shared service.
     *
     * @return \Enqueue\Doctrine\DoctrineConnectionFactoryFactory
     */
    protected function getEnqueue_Transport_Default_ConnectionFactoryFactory_OuterService()
    {
        return $this->privates['enqueue.transport.default.connection_factory_factory.outer'] = new \Enqueue\Doctrine\DoctrineConnectionFactoryFactory(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['enqueue.transport.default.connection_factory_factory.inner'] ?? ($this->privates['enqueue.transport.default.connection_factory_factory.inner'] = new \Enqueue\ConnectionFactoryFactory())));
    }

    /**
     * Gets the private 'enqueue.transport.default.consumption_extensions' shared service.
     *
     * @return \Enqueue\Consumption\ChainExtension
     */
    protected function getEnqueue_Transport_Default_ConsumptionExtensionsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\StartExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PreSubscribeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PreConsumeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\MessageReceivedExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PostMessageReceivedExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\MessageResultExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\ProcessorExceptionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PostConsumeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\EndExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\InitLoggerExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\ChainExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\Extension\\ReplyExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\Extension\\LogExtension.php';

        return $this->privates['enqueue.transport.default.consumption_extensions'] = new \Enqueue\Consumption\ChainExtension([0 => ($this->privates['enqueue.consumption.reply_extension'] ?? ($this->privates['enqueue.consumption.reply_extension'] = new \Enqueue\Consumption\Extension\ReplyExtension())), 1 => ($this->privates['enqueue.transport.default.log_extension'] ?? ($this->privates['enqueue.transport.default.log_extension'] = new \Enqueue\Consumption\Extension\LogExtension()))]);
    }

    /**
     * Gets the private 'enqueue.transport.default.context' shared service.
     *
     * @return \Interop\Queue\Context
     */
    protected function getEnqueue_Transport_Default_ContextService()
    {
        return $this->privates['enqueue.transport.default.context'] = ($this->privates['enqueue.transport.default.connection_factory'] ?? $this->getEnqueue_Transport_Default_ConnectionFactoryService())->createContext();
    }

    /**
     * Gets the private 'enqueue.transport.default.log_extension' shared service.
     *
     * @return \Enqueue\Consumption\Extension\LogExtension
     */
    protected function getEnqueue_Transport_Default_LogExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\StartExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\MessageReceivedExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\PostMessageReceivedExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\EndExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\Extension\\LogExtension.php';

        return $this->privates['enqueue.transport.default.log_extension'] = new \Enqueue\Consumption\Extension\LogExtension();
    }

    /**
     * Gets the private 'enqueue.transport.default.processor_registry' shared service.
     *
     * @return \Enqueue\Symfony\ContainerProcessorRegistry
     */
    protected function getEnqueue_Transport_Default_ProcessorRegistryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\ProcessorRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Symfony\\ContainerProcessorRegistry.php';

        return $this->privates['enqueue.transport.default.processor_registry'] = new \Enqueue\Symfony\ContainerProcessorRegistry((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))->withContext('enqueue.transport.default.processor_registry', $this));
    }

    /**
     * Gets the private 'enqueue.transport.default.queue_consumer' shared service.
     *
     * @return \Enqueue\Consumption\QueueConsumer
     */
    protected function getEnqueue_Transport_Default_QueueConsumerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\QueueConsumerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue\\Consumption\\QueueConsumer.php';

        return $this->privates['enqueue.transport.default.queue_consumer'] = new \Enqueue\Consumption\QueueConsumer(($this->privates['enqueue.transport.default.context'] ?? $this->getEnqueue_Transport_Default_ContextService()), ($this->privates['enqueue.transport.default.consumption_extensions'] ?? $this->getEnqueue_Transport_Default_ConsumptionExtensionsService()), [], ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), 10000);
    }

    /**
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'error_handler.error_renderer.serializer' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_SerializerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\SerializerErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.serializer'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), ($this->privates['twig.error_renderer.html'] ?? $this->getTwig_ErrorRenderer_HtmlService()), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListener2Service()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), true);
    }

    /**
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /**
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\CachingFactoryDecorator.php';

        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(($this->privates['form.choice_list_factory.property_access'] ?? $this->getForm_ChoiceListFactory_PropertyAccessService()));
    }

    /**
     * Gets the private 'form.choice_list_factory.default' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory
     */
    protected function getForm_ChoiceListFactory_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\DefaultChoiceListFactory.php';

        return $this->privates['form.choice_list_factory.default'] = new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory();
    }

    /**
     * Gets the private 'form.choice_list_factory.property_access' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator
     */
    protected function getForm_ChoiceListFactory_PropertyAccessService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\PropertyAccessDecorator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ChoiceList\\Factory\\DefaultChoiceListFactory.php';

        return $this->privates['form.choice_list_factory.property_access'] = new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(($this->privates['form.choice_list_factory.default'] ?? ($this->privates['form.choice_list_factory.default'] = new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory())), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'form.extension' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension
     */
    protected function getForm_ExtensionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DependencyInjection\\DependencyInjectionExtension.php';

        return $this->privates['form.extension'] = new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\UserInterface\\Form\\ArticleType' => ['privates', 'App\\UserInterface\\Form\\ArticleType', 'getArticleTypeService', false],
            'App\\UserInterface\\Form\\CategoryType' => ['privates', 'App\\UserInterface\\Form\\CategoryType', 'getCategoryTypeService', false],
            'App\\UserInterface\\Form\\RecoverPasswordType' => ['privates', 'App\\UserInterface\\Form\\RecoverPasswordType', 'getRecoverPasswordTypeService', false],
            'App\\UserInterface\\Form\\RegistrationType' => ['privates', 'App\\UserInterface\\Form\\RegistrationType', 'getRegistrationTypeService', false],
            'App\\UserInterface\\Form\\ResetPasswordType' => ['privates', 'App\\UserInterface\\Form\\ResetPasswordType', 'getResetPasswordTypeService', false],
            'App\\UserInterface\\Form\\RoleType' => ['privates', 'App\\UserInterface\\Form\\RoleType', 'getRoleTypeService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
        ], [
            'App\\UserInterface\\Form\\ArticleType' => '?',
            'App\\UserInterface\\Form\\CategoryType' => '?',
            'App\\UserInterface\\Form\\RecoverPasswordType' => '?',
            'App\\UserInterface\\Form\\RegistrationType' => '?',
            'App\\UserInterface\\Form\\ResetPasswordType' => '?',
            'App\\UserInterface\\Form\\RoleType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? ($this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(NULL)));
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
            yield 4 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->getForm_TypeExtension_Form_DataCollectorService());
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2));
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRegistry.php';

        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => ($this->privates['form.extension'] ?? $this->getForm_ExtensionService())], ($this->privates['form.resolved_type_factory'] ?? $this->getForm_ResolvedTypeFactoryService()));
    }

    /**
     * Gets the private 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\ResolvedFormTypeFactory.php';

        return $this->privates['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Util\\ServerParams.php';

        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\ChoiceType.php';

        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()));
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\Type\\DoctrineType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\Type\\EntityType.php';

        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\BaseType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\FormType.php';

        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php';

        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', NULL, 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension.php';

        return $this->privates['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension.php';

        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(($this->privates['form.type_extension.form.request_handler'] ?? $this->getForm_TypeExtension_Form_RequestHandlerService()));
    }

    /**
     * Gets the private 'form.type_extension.form.request_handler' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler
     */
    protected function getForm_TypeExtension_Form_RequestHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\RequestHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler.php';

        return $this->privates['form.type_extension.form.request_handler'] = new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /**
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php';

        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(NULL);
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\BaseValidatorExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php';

        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension.php';

        return $this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\BaseValidatorExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension.php';

        return $this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\doctrine-bridge\\Form\\DoctrineOrmTypeGuesser.php';

        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\Extension\\Validator\\ValidatorTypeGuesser.php';

        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\DependencyInjection\\LazyLoadingFragmentHandler.php';

        return $this->privates['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true);
    }

    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Fragment\\InlineFragmentRenderer.php';

        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.date_time_param_converter' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getFrameworkExtraBundle_DateTimeParamConverterService()
    {
        return $this->privates['framework_extra_bundle.date_time_param_converter'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Log\Logger
     */
    protected function getLoggerService()
    {
        return $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger();
    }

    /**
     * Gets the private 'mailer.data_collector' shared service.
     *
     * @return \Symfony\Component\Mailer\DataCollector\MessageDataCollector
     */
    protected function getMailer_DataCollectorService()
    {
        return $this->privates['mailer.data_collector'] = new \Symfony\Component\Mailer\DataCollector\MessageDataCollector(($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener())));
    }

    /**
     * Gets the private 'mailer.envelope_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\EnvelopeListener
     */
    protected function getMailer_EnvelopeListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\EventListener\\EnvelopeListener.php';

        return $this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL);
    }

    /**
     * Gets the private 'mailer.logger_message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageLoggerListener
     */
    protected function getMailer_LoggerMessageListenerService()
    {
        return $this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener();
    }

    /**
     * Gets the private 'mailer.messenger.message_handler' shared service.
     *
     * @return \Symfony\Component\Mailer\Messenger\MessageHandler
     */
    protected function getMailer_Messenger_MessageHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Messenger\\MessageHandler.php';

        return $this->privates['mailer.messenger.message_handler'] = new \Symfony\Component\Mailer\Messenger\MessageHandler(($this->privates['mailer.transports'] ?? $this->getMailer_TransportsService()));
    }

    /**
     * Gets the private 'mailer.transport_factory' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport
     */
    protected function getMailer_TransportFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport.php';

        return $this->privates['mailer.transport_factory'] = new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () {
            yield 0 => ($this->privates['mailer.transport_factory.null'] ?? $this->getMailer_TransportFactory_NullService());
            yield 1 => ($this->privates['mailer.transport_factory.sendmail'] ?? $this->getMailer_TransportFactory_SendmailService());
            yield 2 => ($this->privates['mailer.transport_factory.smtp'] ?? $this->getMailer_TransportFactory_SmtpService());
        }, 3));
    }

    /**
     * Gets the private 'mailer.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NullTransportFactory
     */
    protected function getMailer_TransportFactory_NullService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\NullTransportFactory.php';

        return $this->privates['mailer.transport_factory.null'] = new \Symfony\Component\Mailer\Transport\NullTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'mailer.transport_factory.sendmail' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\SendmailTransportFactory
     */
    protected function getMailer_TransportFactory_SendmailService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\SendmailTransportFactory.php';

        return $this->privates['mailer.transport_factory.sendmail'] = new \Symfony\Component\Mailer\Transport\SendmailTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'mailer.transport_factory.smtp' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory
     */
    protected function getMailer_TransportFactory_SmtpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\Smtp\\EsmtpTransportFactory.php';

        return $this->privates['mailer.transport_factory.smtp'] = new \Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'mailer.transports' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\Transports
     */
    protected function getMailer_TransportsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\TransportInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\Transport\\Transports.php';

        return $this->privates['mailer.transports'] = ($this->privates['mailer.transport_factory'] ?? $this->getMailer_TransportFactoryService())->fromStrings(['main' => $this->getEnv('MAILER_DSN')]);
    }

    /**
     * Gets the private 'messenger.bus.default.messenger.handlers_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlersLocator
     */
    protected function getMessenger_Bus_Default_Messenger_HandlersLocatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Handler\\HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Handler\\HandlersLocator.php';

        return $this->privates['messenger.bus.default.messenger.handlers_locator'] = new \Symfony\Component\Messenger\Handler\HandlersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['.messenger.handler_descriptor.tGvt0LH'] ?? $this->get_Messenger_HandlerDescriptor_TGvt0LHService());
        }, 1), 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['.messenger.handler_descriptor.vMw0m61'] ?? $this->get_Messenger_HandlerDescriptor_VMw0m61Service());
        }, 1), 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['.messenger.handler_descriptor.XZowc.T'] ?? $this->get_Messenger_HandlerDescriptor_XZowc_TService());
        }, 1)]);
    }

    /**
     * Gets the private 'messenger.bus.default.middleware.add_bus_name_stamp_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware
     */
    protected function getMessenger_Bus_Default_Middleware_AddBusNameStampMiddlewareService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\AddBusNameStampMiddleware.php';

        return $this->privates['messenger.bus.default.middleware.add_bus_name_stamp_middleware'] = new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('messenger.bus.default');
    }

    /**
     * Gets the private 'messenger.bus.default.middleware.handle_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware
     */
    protected function getMessenger_Bus_Default_Middleware_HandleMessageService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\HandleMessageMiddleware.php';

        $this->privates['messenger.bus.default.middleware.handle_message'] = $instance = new \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware(($this->privates['messenger.bus.default.messenger.handlers_locator'] ?? $this->getMessenger_Bus_Default_Messenger_HandlersLocatorService()));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'messenger.bus.default.middleware.traceable' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\TraceableMiddleware
     */
    protected function getMessenger_Bus_Default_Middleware_TraceableService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\TraceableMiddleware.php';

        return $this->privates['messenger.bus.default.middleware.traceable'] = new \Symfony\Component\Messenger\Middleware\TraceableMiddleware(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), 'messenger.bus.default');
    }

    /**
     * Gets the private 'messenger.failure.send_failed_message_to_failure_transport_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageToFailureTransportListener
     */
    protected function getMessenger_Failure_SendFailedMessageToFailureTransportListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\EventListener\\SendFailedMessageToFailureTransportListener.php';

        return $this->privates['messenger.failure.send_failed_message_to_failure_transport_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageToFailureTransportListener(($this->privates['messenger.transport.failed'] ?? $this->getMessenger_Transport_FailedService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'messenger.listener.stop_worker_on_restart_signal_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener
     */
    protected function getMessenger_Listener_StopWorkerOnRestartSignalListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\EventListener\\StopWorkerOnRestartSignalListener.php';

        return $this->privates['messenger.listener.stop_worker_on_restart_signal_listener'] = new \Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener(($this->privates['cache.messenger.restart_workers_signal'] ?? $this->getCache_Messenger_RestartWorkersSignalService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'messenger.middleware.dispatch_after_current_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware
     */
    protected function getMessenger_Middleware_DispatchAfterCurrentBusService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\DispatchAfterCurrentBusMiddleware.php';

        return $this->privates['messenger.middleware.dispatch_after_current_bus'] = new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware();
    }

    /**
     * Gets the private 'messenger.middleware.failed_message_processing_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware
     */
    protected function getMessenger_Middleware_FailedMessageProcessingMiddlewareService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\FailedMessageProcessingMiddleware.php';

        return $this->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware();
    }

    /**
     * Gets the private 'messenger.middleware.reject_redelivered_message_middleware' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware
     */
    protected function getMessenger_Middleware_RejectRedeliveredMessageMiddlewareService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\RejectRedeliveredMessageMiddleware.php';

        return $this->privates['messenger.middleware.reject_redelivered_message_middleware'] = new \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware();
    }

    /**
     * Gets the private 'messenger.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    protected function getMessenger_Middleware_SendMessageService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Middleware\\SendMessageMiddleware.php';

        $this->privates['messenger.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(($this->privates['messenger.senders_locator'] ?? $this->getMessenger_SendersLocatorService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setLogger(($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }

    /**
     * Gets the private 'messenger.receiver_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getMessenger_ReceiverLocatorService()
    {
        return $this->privates['messenger.receiver_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', false],
            'mailer' => ['privates', 'messenger.transport.mailer', 'getMessenger_Transport_MailerService', false],
            'messenger.transport.failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', false],
            'messenger.transport.mailer' => ['privates', 'messenger.transport.mailer', 'getMessenger_Transport_MailerService', false],
        ], [
            'failed' => '?',
            'mailer' => '?',
            'messenger.transport.failed' => '?',
            'messenger.transport.mailer' => '?',
        ]);
    }

    /**
     * Gets the private 'messenger.retry.multiplier_retry_strategy.failed' shared service.
     *
     * @return \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy
     */
    protected function getMessenger_Retry_MultiplierRetryStrategy_FailedService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Retry\\RetryStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Retry\\MultiplierRetryStrategy.php';

        return $this->privates['messenger.retry.multiplier_retry_strategy.failed'] = new \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy(3, 1000, 2, 0);
    }

    /**
     * Gets the private 'messenger.retry.multiplier_retry_strategy.mailer' shared service.
     *
     * @return \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy
     */
    protected function getMessenger_Retry_MultiplierRetryStrategy_MailerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Retry\\RetryStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Retry\\MultiplierRetryStrategy.php';

        return $this->privates['messenger.retry.multiplier_retry_strategy.mailer'] = new \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy(10, 1000, 5, 0);
    }

    /**
     * Gets the private 'messenger.retry.send_failed_message_for_retry_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener
     */
    protected function getMessenger_Retry_SendFailedMessageForRetryListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\EventListener\\SendFailedMessageForRetryListener.php';

        return $this->privates['messenger.retry.send_failed_message_for_retry_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener(($this->privates['.service_locator.XFI_2EC'] ?? $this->get_ServiceLocator_XFI2ECService()), ($this->privates['messenger.retry_strategy_locator'] ?? $this->getMessenger_RetryStrategyLocatorService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'messenger.retry_strategy_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getMessenger_RetryStrategyLocatorService()
    {
        return $this->privates['messenger.retry_strategy_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'failed' => ['privates', 'messenger.retry.multiplier_retry_strategy.failed', 'getMessenger_Retry_MultiplierRetryStrategy_FailedService', false],
            'mailer' => ['privates', 'messenger.retry.multiplier_retry_strategy.mailer', 'getMessenger_Retry_MultiplierRetryStrategy_MailerService', false],
        ], [
            'failed' => '?',
            'mailer' => '?',
        ]);
    }

    /**
     * Gets the private 'messenger.routable_message_bus' shared service.
     *
     * @return \Symfony\Component\Messenger\RoutableMessageBus
     */
    protected function getMessenger_RoutableMessageBusService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\RoutableMessageBus.php';

        return $this->privates['messenger.routable_message_bus'] = new \Symfony\Component\Messenger\RoutableMessageBus(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'messenger.bus.default' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
        ], [
            'messenger.bus.default' => '?',
        ]), ($this->services['messenger.default_bus'] ?? $this->getMessenger_DefaultBusService()));
    }

    /**
     * Gets the private 'messenger.senders_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Sender\SendersLocator
     */
    protected function getMessenger_SendersLocatorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Sender\\SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Sender\\SendersLocator.php';

        return $this->privates['messenger.senders_locator'] = new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => 'mailer']], ($this->privates['.service_locator.XFI_2EC'] ?? $this->get_ServiceLocator_XFI2ECService()));
    }

    /**
     * Gets the private 'messenger.transport.amqp.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\AmqpExt\AmqpTransportFactory
     */
    protected function getMessenger_Transport_Amqp_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\AmqpExt\\AmqpTransportFactory.php';

        return $this->privates['messenger.transport.amqp.factory'] = new \Symfony\Component\Messenger\Transport\AmqpExt\AmqpTransportFactory();
    }

    /**
     * Gets the private 'messenger.transport.doctrine.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Doctrine\DoctrineTransportFactory
     */
    protected function getMessenger_Transport_Doctrine_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Doctrine\\DoctrineTransportFactory.php';

        return $this->privates['messenger.transport.doctrine.factory'] = new \Symfony\Component\Messenger\Transport\Doctrine\DoctrineTransportFactory(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'messenger.transport.failed' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportInterface
     */
    protected function getMessenger_Transport_FailedService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Receiver\\ReceiverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Sender\\SenderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\TransportInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Serialization\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Serialization\\PhpSerializer.php';

        return $this->privates['messenger.transport.failed'] = ($this->privates['messenger.transport_factory'] ?? $this->getMessenger_TransportFactoryService())->createTransport('doctrine://default?queue_name=failed', ['transport_name' => 'failed'], ($this->privates['messenger.transport.native_php_serializer'] ?? ($this->privates['messenger.transport.native_php_serializer'] = new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer())));
    }

    /**
     * Gets the private 'messenger.transport.in_memory.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\InMemoryTransportFactory
     */
    protected function getMessenger_Transport_InMemory_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\InMemoryTransportFactory.php';

        return $this->privates['messenger.transport.in_memory.factory'] = new \Symfony\Component\Messenger\Transport\InMemoryTransportFactory();
    }

    /**
     * Gets the private 'messenger.transport.mailer' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportInterface
     */
    protected function getMessenger_Transport_MailerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Receiver\\ReceiverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Sender\\SenderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\TransportInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Serialization\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Serialization\\PhpSerializer.php';

        return $this->privates['messenger.transport.mailer'] = ($this->privates['messenger.transport_factory'] ?? $this->getMessenger_TransportFactoryService())->createTransport('doctrine://default?queue_name=mailer', ['transport_name' => 'mailer'], ($this->privates['messenger.transport.native_php_serializer'] ?? ($this->privates['messenger.transport.native_php_serializer'] = new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer())));
    }

    /**
     * Gets the private 'messenger.transport.native_php_serializer' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer
     */
    protected function getMessenger_Transport_NativePhpSerializerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Serialization\\SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Serialization\\PhpSerializer.php';

        return $this->privates['messenger.transport.native_php_serializer'] = new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer();
    }

    /**
     * Gets the private 'messenger.transport.redis.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\RedisExt\RedisTransportFactory
     */
    protected function getMessenger_Transport_Redis_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\RedisExt\\RedisTransportFactory.php';

        return $this->privates['messenger.transport.redis.factory'] = new \Symfony\Component\Messenger\Transport\RedisExt\RedisTransportFactory();
    }

    /**
     * Gets the private 'messenger.transport.sync.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Sync\SyncTransportFactory
     */
    protected function getMessenger_Transport_Sync_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\Sync\\SyncTransportFactory.php';

        return $this->privates['messenger.transport.sync.factory'] = new \Symfony\Component\Messenger\Transport\Sync\SyncTransportFactory(($this->privates['messenger.routable_message_bus'] ?? $this->getMessenger_RoutableMessageBusService()));
    }

    /**
     * Gets the private 'messenger.transport_factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportFactory
     */
    protected function getMessenger_TransportFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\messenger\\Transport\\TransportFactory.php';

        return $this->privates['messenger.transport_factory'] = new \Symfony\Component\Messenger\Transport\TransportFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['messenger.transport.amqp.factory'] ?? ($this->privates['messenger.transport.amqp.factory'] = new \Symfony\Component\Messenger\Transport\AmqpExt\AmqpTransportFactory()));
            yield 1 => ($this->privates['messenger.transport.redis.factory'] ?? ($this->privates['messenger.transport.redis.factory'] = new \Symfony\Component\Messenger\Transport\RedisExt\RedisTransportFactory()));
            yield 2 => ($this->privates['messenger.transport.sync.factory'] ?? $this->getMessenger_Transport_Sync_FactoryService());
            yield 3 => ($this->privates['messenger.transport.in_memory.factory'] ?? ($this->privates['messenger.transport.in_memory.factory'] = new \Symfony\Component\Messenger\Transport\InMemoryTransportFactory()));
            yield 4 => ($this->privates['messenger.transport.doctrine.factory'] ?? $this->getMessenger_Transport_Doctrine_FactoryService());
            yield 5 => ($this->privates['enqueue.messenger_transport.factory'] ?? $this->getEnqueue_MessengerTransport_FactoryService());
        }, 6));
    }

    /**
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\MimeTypes.php';

        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /**
     * Gets the private 'notifier.transport_factory.null' shared service.
     *
     * @return \Symfony\Component\Notifier\Transport\NullTransportFactory
     */
    protected function getNotifier_TransportFactory_NullService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Transport\\TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Transport\\AbstractTransportFactory.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Transport\\NullTransportFactory.php';

        return $this->privates['notifier.transport_factory.null'] = new \Symfony\Component\Notifier\Transport\NullTransportFactory(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()));
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'profiler.storage' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage
     */
    protected function getProfiler_StorageService()
    {
        return $this->privates['profiler.storage'] = new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler'));
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-access\\PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-access\\PropertyAccessor.php';

        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, ($this->privates['cache.property_access'] ?? ($this->privates['cache.property_access'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false))), true);
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->getPropertyInfo_SerializerExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1));
    }

    /**
     * Gets the private 'property_info.php_doc_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor
     */
    protected function getPropertyInfo_PhpDocExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\Extractor\\PhpDocExtractor.php';

        return $this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor();
    }

    /**
     * Gets the private 'property_info.reflection_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor
     */
    protected function getPropertyInfo_ReflectionExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\Extractor\\ReflectionExtractor.php';

        return $this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor();
    }

    /**
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    protected function getPropertyInfo_SerializerExtractorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\property-info\\Extractor\\SerializerExtractor.php';

        return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'routing.loader.annotation' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader
     */
    protected function getRouting_Loader_AnnotationService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Routing\\AnnotatedRouteControllerLoader.php';

        return $this->privates['routing.loader.annotation'] = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'routing.loader.annotation.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader
     */
    protected function getRouting_Loader_Annotation_DirectoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationDirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['routing.loader.annotation.directory'] = new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
    }

    /**
     * Gets the private 'routing.loader.annotation.file' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\AnnotationFileLoader
     */
    protected function getRouting_Loader_Annotation_FileService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['routing.loader.annotation.file'] = new \Symfony\Component\Routing\Loader\AnnotationFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
    }

    /**
     * Gets the private 'routing.loader.container' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\ContainerLoader
     */
    protected function getRouting_Loader_ContainerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\ContainerLoader.php';

        return $this->privates['routing.loader.container'] = new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ]));
    }

    /**
     * Gets the private 'routing.loader.directory' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\DirectoryLoader
     */
    protected function getRouting_Loader_DirectoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['routing.loader.directory'] = new \Symfony\Component\Routing\Loader\DirectoryLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'routing.loader.glob' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\GlobFileLoader
     */
    protected function getRouting_Loader_GlobService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['routing.loader.glob'] = new \Symfony\Component\Routing\Loader\GlobFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'routing.loader.php' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\PhpFileLoader
     */
    protected function getRouting_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['routing.loader.php'] = new \Symfony\Component\Routing\Loader\PhpFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'routing.loader.xml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\XmlFileLoader
     */
    protected function getRouting_Loader_XmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['routing.loader.xml'] = new \Symfony\Component\Routing\Loader\XmlFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'routing.loader.yml' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\YamlFileLoader
     */
    protected function getRouting_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\Loader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\FileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\routing\\Loader\\YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\FileLocator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

        return $this->privates['routing.loader.yml'] = new \Symfony\Component\Routing\Loader\YamlFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the private 'routing.resolver' shared service.
     *
     * @return \Symfony\Component\Config\Loader\LoaderResolver
     */
    protected function getRouting_ResolverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\config\\Loader\\LoaderResolver.php';

        $this->privates['routing.resolver'] = $instance = new \Symfony\Component\Config\Loader\LoaderResolver();

        $instance->addLoader(($this->privates['routing.loader.xml'] ?? $this->getRouting_Loader_XmlService()));
        $instance->addLoader(($this->privates['routing.loader.yml'] ?? $this->getRouting_Loader_YmlService()));
        $instance->addLoader(($this->privates['routing.loader.php'] ?? $this->getRouting_Loader_PhpService()));
        $instance->addLoader(($this->privates['routing.loader.glob'] ?? $this->getRouting_Loader_GlobService()));
        $instance->addLoader(($this->privates['routing.loader.directory'] ?? $this->getRouting_Loader_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.container'] ?? $this->getRouting_Loader_ContainerService()));
        $instance->addLoader(($this->privates['routing.loader.annotation'] ?? $this->getRouting_Loader_AnnotationService()));
        $instance->addLoader(($this->privates['routing.loader.annotation.directory'] ?? $this->getRouting_Loader_Annotation_DirectoryService()));
        $instance->addLoader(($this->privates['routing.loader.annotation.file'] ?? $this->getRouting_Loader_Annotation_FileService()));

        return $instance;
    }

    /**
     * Gets the private 'secrets.local_vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault
     */
    protected function getSecrets_LocalVaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\DotenvVault.php';

        return $this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.test.local'));
    }

    /**
     * Gets the private 'secrets.vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault
     */
    protected function getSecrets_VaultService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\AbstractVault.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\dependency-injection\\EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Secrets\\SodiumVault.php';

        return $this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/test'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'));
    }

    /**
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\AuthenticatedVoter.php';

        return $this->privates['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())));
    }

    /**
     * Gets the private 'security.access.simple_role_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter
     */
    protected function getSecurity_Access_SimpleRoleVoterService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\VoterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authorization\\Voter\\RoleVoter.php';

        return $this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter();
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AccessListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';

        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? ($this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';

        return $this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap();
    }

    /**
     * Gets the private 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\GuardAuthenticatorHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';

        $this->privates['security.authentication.guard_handler'] = $instance = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), []);

        $instance->setSessionAuthenticationStrategy(($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Firewall\\GuardAuthenticationListener.php';

        return $this->privates['security.authentication.listener.guard.main'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(($this->privates['security.authentication.guard_handler'] ?? $this->getSecurity_Authentication_GuardHandlerService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Infrastructure\\Security\\Guard\\WebAuthenticator'] ?? $this->getWebAuthenticatorService());
        }, 1), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->getSecurity_Authentication_Provider_Guard_MainService());
            yield 1 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AnonymousAuthenticationProvider.php';

        return $this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'));
    }

    /**
     * Gets the private 'security.authentication.provider.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-guard\\Provider\\GuardAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserChecker.php';

        return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Infrastructure\\Security\\Guard\\WebAuthenticator'] ?? $this->getWebAuthenticatorService());
        }, 1), ($this->privates['App\\Infrastructure\\Security\\Provider\\UserProvider'] ?? $this->getUserProviderService()), 'main', ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'security.authentication.retry_entry_point' shared service.
     *
     * @return \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint
     */
    protected function getSecurity_Authentication_RetryEntryPointService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\RetryAuthenticationEntryPoint.php';

        return $this->privates['security.authentication.retry_entry_point'] = new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443);
    }

    /**
     * Gets the private 'security.authentication.session_strategy' shared service.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Session\\SessionAuthenticationStrategy.php';

        return $this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver();
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ChannelListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\AccessMap.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\EntryPoint\\RetryAuthenticationEntryPoint.php';

        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? ($this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($this->privates['security.authentication.retry_entry_point'] ?? ($this->privates['security.authentication.retry_entry_point'] = new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Command\\UserPasswordEncoderCommand.php';

        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'App\\Infrastructure\\Security\\User']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /**
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ContextListener.php';

        return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Infrastructure\\Security\\Provider\\UserProvider'] ?? $this->getUserProviderService());
        }, 1), 'main', ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /**
     * Gets the private 'security.csrf.token_generator' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator
     */
    protected function getSecurity_Csrf_TokenGeneratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenGenerator\\UriSafeTokenGenerator.php';

        return $this->privates['security.csrf.token_generator'] = new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator();
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\TokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\ClearableTokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-csrf\\TokenStorage\\SessionTokenStorage.php';

        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /**
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\EncoderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Encoder\\EncoderFactory.php';

        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Infrastructure\\Security\\User' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => NULL, 3 => 'argon2i']]]);
    }

    /**
     * Gets the private 'security.exception_listener.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ExceptionListener
     */
    protected function getSecurity_ExceptionListener_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Util\\TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\ExceptionListener.php';

        return $this->privates['security.exception_listener.main'] = new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), 'main', ($this->privates['App\\Infrastructure\\Security\\Guard\\WebAuthenticator'] ?? $this->getWebAuthenticatorService()), NULL, NULL, ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), false);
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService', false],
        ], [
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 2));
    }

    /**
     * Gets the private 'security.firewall.map.config.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
     */
    protected function getSecurity_Firewall_Map_Config_DevService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

        return $this->privates['security.firewall.map.config.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.Iy.T22O', false, false, '', '', '', '', '', [], NULL);
    }

    /**
     * Gets the private 'security.firewall.map.config.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallConfig
     */
    protected function getSecurity_Firewall_Map_Config_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallConfig.php';

        return $this->privates['security.firewall.map.config.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', '.security.request_matcher.3UEFixr', true, false, 'App\\Infrastructure\\Security\\Provider\\UserProvider', 'main', 'App\\Infrastructure\\Security\\Guard\\WebAuthenticator', NULL, NULL, [0 => 'guard', 1 => 'anonymous'], NULL);
    }

    /**
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';

        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, ($this->privates['security.firewall.map.config.dev'] ?? $this->getSecurity_Firewall_Map_Config_DevService()));
    }

    /**
     * Gets the private 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\FirewallContext.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle\\Security\\LazyFirewallContext.php';

        return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.guard.main'] ?? $this->getSecurity_Authentication_Listener_Guard_MainService());
            yield 3 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->getSecurity_Authentication_Listener_Anonymous_MainService());
            yield 4 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 5), ($this->privates['security.exception_listener.main'] ?? $this->getSecurity_ExceptionListener_MainService()), ($this->privates['security.logout_listener.main'] ?? $this->getSecurity_LogoutListener_MainService()), ($this->privates['security.firewall.map.config.main'] ?? $this->getSecurity_Firewall_Map_Config_MainService()), ($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\HttpUtils.php';

        $a = ($this->services['router'] ?? $this->getRouterService());

        return $this->privates['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i', '{^https://%s$}i');
    }

    /**
     * Gets the private 'security.logout.handler.csrf_token_clearing' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler
     */
    protected function getSecurity_Logout_Handler_CsrfTokenClearingService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\CsrfTokenClearingLogoutHandler.php';

        return $this->privates['security.logout.handler.csrf_token_clearing'] = new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()));
    }

    /**
     * Gets the private 'security.logout.handler.session' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\SessionLogoutHandler
     */
    protected function getSecurity_Logout_Handler_SessionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\SessionLogoutHandler.php';

        return $this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }

    /**
     * Gets the private 'security.logout.success_handler.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler
     */
    protected function getSecurity_Logout_SuccessHandler_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\DefaultLogoutSuccessHandler.php';

        return $this->privates['security.logout.success_handler.main'] = new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler(($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), '/');
    }

    /**
     * Gets the private 'security.logout_listener.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\LogoutListener
     */
    protected function getSecurity_LogoutListener_MainService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\AbstractListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Firewall\\LogoutListener.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-http\\Logout\\SessionLogoutHandler.php';

        $this->privates['security.logout_listener.main'] = $instance = new \Symfony\Component\Security\Http\Firewall\LogoutListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), ($this->privates['security.logout.success_handler.main'] ?? $this->getSecurity_Logout_SuccessHandler_MainService()), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'logout']);

        $instance->addHandler(($this->privates['security.logout.handler.csrf_token_clearing'] ?? $this->getSecurity_Logout_Handler_CsrfTokenClearingService()));
        $instance->addHandler(($this->privates['security.logout.handler.session'] ?? ($this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler())));

        return $instance;
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('main', 'logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]);
    }

    /**
     * Gets the private 'security.untracked_token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_UntrackedTokenStorageService()
    {
        return $this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the private 'security.user_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserCheckerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\User\\UserChecker.php';

        return $this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Validator\\Constraints\\UserPasswordValidator.php';

        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->privates['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), NULL);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(($this->privates['sensio_framework_extra.converter.manager'] ?? $this->getSensioFrameworkExtra_Converter_ManagerService()), true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->privates['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(($this->privates['App\\Infrastructure\\ParamConverter\\ArticleConverter'] ?? $this->getArticleConverterService()), 0, NULL);
        $instance->add(($this->privates['App\\Infrastructure\\ParamConverter\\CategoryConverter'] ?? $this->getCategoryConverterService()), 0, NULL);
        $instance->add(($this->privates['sensio_framework_extra.converter.doctrine.orm'] ?? $this->getSensioFrameworkExtra_Converter_Doctrine_OrmService()), 0, 'doctrine.orm');
        $instance->add(($this->privates['framework_extra_bundle.date_time_param_converter'] ?? ($this->privates['framework_extra_bundle.date_time_param_converter'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter())), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), NULL, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($this->privates['security.role_hierarchy'] ?? ($this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy([]))), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->privates['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        $this->privates['sensio_framework_extra.view.listener'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(($this->privates['sensio_framework_extra.view.guesser'] ?? ($this->privates['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))))));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('sensio_framework_extra.view.listener', $this));

        return $instance;
    }

    /**
     * Gets the private 'serializer.denormalizer.array' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer
     */
    protected function getSerializer_Denormalizer_ArrayService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ArrayDenormalizer.php';

        return $this->privates['serializer.denormalizer.array'] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
    }

    /**
     * Gets the private 'serializer.encoder.csv' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\CsvEncoder
     */
    protected function getSerializer_Encoder_CsvService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\CsvEncoder.php';

        return $this->privates['serializer.encoder.csv'] = new \Symfony\Component\Serializer\Encoder\CsvEncoder();
    }

    /**
     * Gets the private 'serializer.encoder.json' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\JsonEncoder
     */
    protected function getSerializer_Encoder_JsonService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\JsonEncoder.php';

        return $this->privates['serializer.encoder.json'] = new \Symfony\Component\Serializer\Encoder\JsonEncoder();
    }

    /**
     * Gets the private 'serializer.encoder.xml' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\XmlEncoder
     */
    protected function getSerializer_Encoder_XmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\XmlEncoder.php';

        return $this->privates['serializer.encoder.xml'] = new \Symfony\Component\Serializer\Encoder\XmlEncoder();
    }

    /**
     * Gets the private 'serializer.encoder.yaml' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\YamlEncoder
     */
    protected function getSerializer_Encoder_YamlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Encoder\\YamlEncoder.php';

        return $this->privates['serializer.encoder.yaml'] = new \Symfony\Component\Serializer\Encoder\YamlEncoder();
    }

    /**
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\SerializerCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\AnnotationLoader.php';

        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /**
     * Gets the private 'serializer.mapping.chain_loader' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Loader\LoaderChain
     */
    protected function getSerializer_Mapping_ChainLoaderService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\LoaderChain.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Loader\\AnnotationLoader.php';

        return $this->privates['serializer.mapping.chain_loader'] = new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))]);
    }

    /**
     * Gets the private 'serializer.mapping.class_discriminator_resolver' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata
     */
    protected function getSerializer_Mapping_ClassDiscriminatorResolverService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\ClassDiscriminatorResolverInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\ClassDiscriminatorFromClassMetadata.php';

        return $this->privates['serializer.mapping.class_discriminator_resolver'] = new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassResolverTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Mapping\\Factory\\ClassMetadataFactory.php';

        return $this->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(($this->privates['serializer.mapping.chain_loader'] ?? $this->getSerializer_Mapping_ChainLoaderService()));
    }

    /**
     * Gets the private 'serializer.name_converter.metadata_aware' shared service.
     *
     * @return \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter
     */
    protected function getSerializer_NameConverter_MetadataAwareService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\NameConverter\\NameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\NameConverter\\AdvancedNameConverterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\NameConverter\\MetadataAwareNameConverter.php';

        return $this->privates['serializer.name_converter.metadata_aware'] = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'serializer.normalizer.constraint_violation_list' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer
     */
    protected function getSerializer_Normalizer_ConstraintViolationListService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ConstraintViolationListNormalizer.php';

        return $this->privates['serializer.normalizer.constraint_violation_list'] = new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService()));
    }

    /**
     * Gets the private 'serializer.normalizer.data_uri' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DataUriNormalizer
     */
    protected function getSerializer_Normalizer_DataUriService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DataUriNormalizer.php';

        return $this->privates['serializer.normalizer.data_uri'] = new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService()));
    }

    /**
     * Gets the private 'serializer.normalizer.dateinterval' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer
     */
    protected function getSerializer_Normalizer_DateintervalService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateIntervalNormalizer.php';

        return $this->privates['serializer.normalizer.dateinterval'] = new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.datetime' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer
     */
    protected function getSerializer_Normalizer_DatetimeService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateTimeNormalizer.php';

        return $this->privates['serializer.normalizer.datetime'] = new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.datetimezone' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer
     */
    protected function getSerializer_Normalizer_DatetimezoneService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DateTimeZoneNormalizer.php';

        return $this->privates['serializer.normalizer.datetimezone'] = new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.json_serializable' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer
     */
    protected function getSerializer_Normalizer_JsonSerializableService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\JsonSerializableNormalizer.php';

        return $this->privates['serializer.normalizer.json_serializable'] = new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer();
    }

    /**
     * Gets the private 'serializer.normalizer.object' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ObjectNormalizer
     */
    protected function getSerializer_Normalizer_ObjectService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\AbstractObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ObjectNormalizer.php';

        return $this->privates['serializer.normalizer.object'] = new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()), ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService()), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['property_info'] ?? $this->getPropertyInfoService()), ($this->privates['serializer.mapping.class_discriminator_resolver'] ?? $this->getSerializer_Mapping_ClassDiscriminatorResolverService()), NULL, []);
    }

    /**
     * Gets the private 'serializer.normalizer.problem' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ProblemNormalizer
     */
    protected function getSerializer_Normalizer_ProblemService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\serializer\\Normalizer\\ProblemNormalizer.php';

        return $this->privates['serializer.normalizer.problem'] = new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true);
    }

    /**
     * Gets the private 'session.flash_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Flash\FlashBag
     */
    protected function getSession_FlashBagService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Flash\\FlashBag.php';

        return $this->privates['session.flash_bag'] = ($this->services['session'] ?? $this->getSessionService())->getFlashBag();
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php';

        return $this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0);
    }

    /**
     * Gets the private 'session.storage.mock_file' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_MockFileService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MockArraySessionStorage.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MockFileSessionStorage.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-foundation\\Session\\Storage\\MetadataBag.php';

        return $this->privates['session.storage.mock_file'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage(($this->targetDir.''.'/sessions'), 'MOCKSESSID', ($this->privates['session.storage.metadata_bag'] ?? ($this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0))));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.mock_file', 'getSession_Storage_MockFileService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'test.client.cookiejar' service.
     *
     * @return \Symfony\Component\BrowserKit\CookieJar
     */
    protected function getTest_Client_CookiejarService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\CookieJar.php';

        return new \Symfony\Component\BrowserKit\CookieJar();
    }

    /**
     * Gets the private 'test.client.history' service.
     *
     * @return \Symfony\Component\BrowserKit\History
     */
    protected function getTest_Client_HistoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\browser-kit\\History.php';

        return new \Symfony\Component\BrowserKit\History();
    }

    /**
     * Gets the private 'test.session.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TestSessionListener
     */
    protected function getTest_Session_ListenerService()
    {
        return $this->privates['test.session.listener'] = new \Symfony\Component\HttpKernel\EventListener\TestSessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]), $this->parameters['session.storage.options']);
    }

    /**
     * Gets the private 'texter.messenger.sms_handler' shared service.
     *
     * @return \Symfony\Component\Notifier\Messenger\MessageHandler
     */
    protected function getTexter_Messenger_SmsHandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Messenger\\MessageHandler.php';

        return $this->privates['texter.messenger.sms_handler'] = new \Symfony\Component\Notifier\Messenger\MessageHandler(($this->privates['texter.transports'] ?? $this->getTexter_TransportsService()));
    }

    /**
     * Gets the private 'texter.transport_factory' shared service.
     *
     * @return \Symfony\Component\Notifier\Transport
     */
    protected function getTexter_TransportFactoryService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Transport.php';

        return $this->privates['texter.transport_factory'] = new \Symfony\Component\Notifier\Transport(new RewindableGenerator(function () {
            yield 0 => ($this->privates['notifier.transport_factory.null'] ?? $this->getNotifier_TransportFactory_NullService());
        }, 1));
    }

    /**
     * Gets the private 'texter.transports' shared service.
     *
     * @return \Symfony\Component\Notifier\Transport\Transports
     */
    protected function getTexter_TransportsService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Transport\\TransportInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\notifier\\Transport\\Transports.php';

        return $this->privates['texter.transports'] = ($this->privates['texter.transport_factory'] ?? $this->getTexter_TransportFactoryService())->fromStrings([]);
    }

    /**
     * Gets the private 'twig.app_variable' shared service.
     *
     * @return \Symfony\Bridge\Twig\AppVariable
     */
    protected function getTwig_AppVariableService()
    {
        $this->privates['twig.app_variable'] = $instance = new \Symfony\Bridge\Twig\AppVariable();

        $instance->setEnvironment('test');
        $instance->setDebug(true);
        if ($this->has('security.token_storage')) {
            $instance->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $instance->setRequestStack(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        }

        return $instance;
    }

    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Command\\DebugCommand.php';

        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Command\\LintCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\Command\\LintCommand.php';

        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.configurator.environment' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator
     */
    protected function getTwig_Configurator_EnvironmentService()
    {
        return $this->privates['twig.configurator.environment'] = new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ',');
    }

    /**
     * Gets the private 'twig.error_renderer.html' shared service.
     *
     * @return \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer
     */
    protected function getTwig_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\error-handler\\ErrorRenderer\\ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\ErrorRenderer\\TwigErrorRenderer.php';

        return $this->privates['twig.error_renderer.html'] = new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true));
    }

    /**
     * Gets the private 'twig.extension.code' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CodeExtension
     */
    protected function getTwig_Extension_CodeService()
    {
        return $this->privates['twig.extension.code'] = new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), 'UTF-8');
    }

    /**
     * Gets the private 'twig.extension.cssinliner' shared service.
     *
     * @return \Twig\Extra\CssInliner\CssInlinerExtension
     */
    protected function getTwig_Extension_CssinlinerService()
    {
        return $this->privates['twig.extension.cssinliner'] = new \Twig\Extra\CssInliner\CssInlinerExtension();
    }

    /**
     * Gets the private 'twig.extension.debug' shared service.
     *
     * @return \Twig\Extension\DebugExtension
     */
    protected function getTwig_Extension_DebugService()
    {
        return $this->privates['twig.extension.debug'] = new \Twig\Extension\DebugExtension();
    }

    /**
     * Gets the private 'twig.extension.debug.stopwatch' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\StopwatchExtension
     */
    protected function getTwig_Extension_Debug_StopwatchService()
    {
        return $this->privates['twig.extension.debug.stopwatch'] = new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), true);
    }

    /**
     * Gets the private 'twig.extension.form' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\FormExtension
     */
    protected function getTwig_Extension_FormService()
    {
        return $this->privates['twig.extension.form'] = new \Symfony\Bridge\Twig\Extension\FormExtension();
    }

    /**
     * Gets the private 'twig.extension.httpfoundation' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpFoundationExtension
     */
    protected function getTwig_Extension_HttpfoundationService()
    {
        return $this->privates['twig.extension.httpfoundation'] = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(($this->privates['url_helper'] ?? $this->getUrlHelperService()));
    }

    /**
     * Gets the private 'twig.extension.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelExtension
     */
    protected function getTwig_Extension_HttpkernelService()
    {
        return $this->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension();
    }

    /**
     * Gets the private 'twig.extension.inky' shared service.
     *
     * @return \Twig\Extra\Inky\InkyExtension
     */
    protected function getTwig_Extension_InkyService()
    {
        return $this->privates['twig.extension.inky'] = new \Twig\Extra\Inky\InkyExtension();
    }

    /**
     * Gets the private 'twig.extension.logout_url' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\LogoutUrlExtension
     */
    protected function getTwig_Extension_LogoutUrlService()
    {
        return $this->privates['twig.extension.logout_url'] = new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'twig.extension.profiler' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ProfilerExtension
     */
    protected function getTwig_Extension_ProfilerService()
    {
        return $this->privates['twig.extension.profiler'] = new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'twig.extension.routing' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\RoutingExtension
     */
    protected function getTwig_Extension_RoutingService()
    {
        return $this->privates['twig.extension.routing'] = new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'twig.extension.security' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\SecurityExtension
     */
    protected function getTwig_Extension_SecurityService()
    {
        return $this->privates['twig.extension.security'] = new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'twig.extension.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfExtension
     */
    protected function getTwig_Extension_SecurityCsrfService()
    {
        return $this->privates['twig.extension.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfExtension();
    }

    /**
     * Gets the private 'twig.extension.trans' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\TranslationExtension
     */
    protected function getTwig_Extension_TransService()
    {
        return $this->privates['twig.extension.trans'] = new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL);
    }

    /**
     * Gets the private 'twig.extension.webprofiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension
     */
    protected function getTwig_Extension_WebprofilerService()
    {
        $a = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $a->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $this->privates['twig.extension.webprofiler'] = new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($a);
    }

    /**
     * Gets the private 'twig.extension.yaml' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\YamlExtension
     */
    protected function getTwig_Extension_YamlService()
    {
        return $this->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension();
    }

    /**
     * Gets the private 'twig.form.engine' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRendererEngine
     */
    protected function getTwig_Form_EngineService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRendererEngineInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractRendererEngine.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Form\\TwigRendererEngine.php';

        return $this->privates['twig.form.engine'] = new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormRenderer.php';

        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(($this->privates['twig.form.engine'] ?? $this->getTwig_Form_EngineService()), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.loader.native_filesystem' shared service.
     *
     * @return \Twig\Loader\FilesystemLoader
     */
    protected function getTwig_Loader_NativeFilesystemService()
    {
        $this->privates['twig.loader.native_filesystem'] = $instance = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));

        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), 'WebProfiler');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), '!WebProfiler');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/Resources/views'), 'Security');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle/Resources/views'), '!Security');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue-bundle/Resources/views'), 'Enqueue');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue-bundle/Resources/views'), '!Enqueue');
        $instance->addPath((\dirname(__DIR__, 4).'/templates'));
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), 'email');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email'), '!email');
        $instance->addPath((\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    protected function getTwig_Mailer_MessageListenerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mailer\\EventListener\\MessageListener.php';

        return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, ($this->privates['twig.mime_body_renderer'] ?? $this->getTwig_MimeBodyRendererService()));
    }

    /**
     * Gets the private 'twig.mime_body_renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Mime\BodyRenderer
     */
    protected function getTwig_MimeBodyRendererService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\mime\\BodyRendererInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Mime\\BodyRenderer.php';

        return $this->privates['twig.mime_body_renderer'] = new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'twig.missing_extension_suggestor' shared service.
     *
     * @return \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor
     */
    protected function getTwig_MissingExtensionSuggestorService()
    {
        return $this->privates['twig.missing_extension_suggestor'] = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->privates['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelRuntime.php';

        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(($this->privates['fragment.handler'] ?? $this->getFragment_HandlerService()));
    }

    /**
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge\\Extension\\CsrfRuntime.php';

        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.runtime_loader' shared service.
     *
     * @return \Twig\RuntimeLoader\ContainerRuntimeLoader
     */
    protected function getTwig_RuntimeLoaderService()
    {
        return $this->privates['twig.runtime_loader'] = new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ]));
    }

    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\CacheWarmer\\TemplateCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\TemplateIterator.php';

        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $this), ($this->privates['twig.template_iterator'] ?? ($this->privates['twig.template_iterator'] = new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), [(\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')))));
    }

    /**
     * Gets the private 'twig.template_iterator' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TemplateIterator
     */
    protected function getTwig_TemplateIteratorService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle\\TemplateIterator.php';

        return $this->privates['twig.template_iterator'] = new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), [(\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates'));
    }

    /**
     * Gets the private 'url_helper' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\UrlHelper
     */
    protected function getUrlHelperService()
    {
        return $this->privates['url_helper'] = new \Symfony\Component\HttpFoundation\UrlHelper(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'\\vendor\\symfony\\form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => ($this->privates['doctrine.orm.validator_initializer'] ?? $this->getDoctrine_Orm_ValidatorInitializerService())]);
        $instance->addLoader(($this->privates['validator.property_info_loader'] ?? $this->getValidator_PropertyInfoLoaderService()));
        $instance->addLoader(($this->privates['doctrine.orm.default_entity_manager.validator_loader'] ?? $this->getDoctrine_Orm_DefaultEntityManager_ValidatorLoaderService()));

        return $instance;
    }

    /**
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Constraints\\EmailValidator.php';

        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /**
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Constraints\\ExpressionValidator.php';

        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\CacheWarmer\\ValidatorCacheWarmer.php';

        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /**
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\validator\\Constraints\\NotCompromisedPasswordValidator.php';

        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), 'UTF-8', false, NULL);
    }

    /**
     * Gets the private 'validator.property_info_loader' shared service.
     *
     * @return \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader
     */
    protected function getValidator_PropertyInfoLoaderService()
    {
        $a = ($this->privates['property_info'] ?? $this->getPropertyInfoService());

        return $this->privates['validator.property_info_loader'] = new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL);
    }

    /**
     * Gets the private 'validator.validator_factory' shared service.
     *
     * @return \Symfony\Component\Validator\ContainerConstraintValidatorFactory
     */
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->privates['validator.validator_factory'] = new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Infrastructure\\Validator\\NonUniqueEmailValidator' => ['privates', 'App\\Infrastructure\\Validator\\NonUniqueEmailValidator', 'getNonUniqueEmailValidatorService', false],
            'App\\Infrastructure\\Validator\\NonUniquePseudoValidator' => ['privates', 'App\\Infrastructure\\Validator\\NonUniquePseudoValidator', 'getNonUniquePseudoValidatorService', false],
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'App\\Infrastructure\\Validator\\NonUniqueEmailValidator' => '?',
            'App\\Infrastructure\\Validator\\NonUniquePseudoValidator' => '?',
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ]));
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Csp\\ContentSecurityPolicyHandler.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle\\Csp\\NonceGenerator.php';

        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    public function getParameter(string $name)
    {
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/App_KernelTestDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'test',
            'kernel.debug' => true,
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'\\log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'DAMADoctrineTestBundle' => 'DAMA\\DoctrineTestBundle\\DAMADoctrineTestBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'EnqueueBundle' => 'Enqueue\\Bundle\\EnqueueBundle',
                'EnqueueAdapterBundle' => 'Enqueue\\MessengerAdapter\\Bundle\\EnqueueAdapterBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\twig\\extra-bundle\\src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'DoctrineFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\doctrine\\doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ],
                'DAMADoctrineTestBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\dama\\doctrine-test-bundle\\src\\DAMA\\DoctrineTestBundle'),
                    'namespace' => 'DAMA\\DoctrineTestBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\symfony\\security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sensio\\framework-extra-bundle\\src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'EnqueueBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\enqueue\\enqueue-bundle'),
                    'namespace' => 'Enqueue\\Bundle',
                ],
                'EnqueueAdapterBundle' => [
                    'path' => (\dirname(__DIR__, 4).'\\vendor\\sroze\\messenger-enqueue-transport\\Bundle'),
                    'namespace' => 'Enqueue\\MessengerAdapter\\Bundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'App_KernelTestDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'app.from_email' => 'no-reply@ma-salle.com',
            'app.display_name' => 'Ma Salle',
            'event_dispatcher.event_aliases' => [
                'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => 'console.command',
                'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => 'console.error',
                'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => 'console.terminate',
                'Symfony\\Component\\Form\\Event\\PreSubmitEvent' => 'form.pre_submit',
                'Symfony\\Component\\Form\\Event\\SubmitEvent' => 'form.submit',
                'Symfony\\Component\\Form\\Event\\PostSubmitEvent' => 'form.post_submit',
                'Symfony\\Component\\Form\\Event\\PreSetDataEvent' => 'form.pre_set_data',
                'Symfony\\Component\\Form\\Event\\PostSetDataEvent' => 'form.post_set_data',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent' => 'kernel.controller_arguments',
                'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent' => 'kernel.controller',
                'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent' => 'kernel.response',
                'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent' => 'kernel.finish_request',
                'Symfony\\Component\\HttpKernel\\Event\\RequestEvent' => 'kernel.request',
                'Symfony\\Component\\HttpKernel\\Event\\ViewEvent' => 'kernel.view',
                'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent' => 'kernel.exception',
                'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent' => 'kernel.terminate',
                'Symfony\\Component\\Workflow\\Event\\GuardEvent' => 'workflow.guard',
                'Symfony\\Component\\Workflow\\Event\\LeaveEvent' => 'workflow.leave',
                'Symfony\\Component\\Workflow\\Event\\TransitionEvent' => 'workflow.transition',
                'Symfony\\Component\\Workflow\\Event\\EnterEvent' => 'workflow.enter',
                'Symfony\\Component\\Workflow\\Event\\EnteredEvent' => 'workflow.entered',
                'Symfony\\Component\\Workflow\\Event\\CompletedEvent' => 'workflow.completed',
                'Symfony\\Component\\Workflow\\Event\\AnnounceEvent' => 'workflow.announce',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationSuccessEvent' => 'security.authentication.success',
                'Symfony\\Component\\Security\\Core\\Event\\AuthenticationFailureEvent' => 'security.authentication.failure',
                'Symfony\\Component\\Security\\Http\\Event\\InteractiveLoginEvent' => 'security.interactive_login',
                'Symfony\\Component\\Security\\Http\\Event\\SwitchUserEvent' => 'security.switch_user',
            ],
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'debug.file_link_format' => NULL,
            'test.client.parameters' => [

            ],
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'validator.translation_domain' => 'validators',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
                1 => 'bootstrap_4_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [
                'uuid' => [
                    'class' => 'Ramsey\\Uuid\\Doctrine\\UuidType',
                ],
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Infrastructure/Doctrine/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.migrations_paths' => [

            ],
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'security.role_hierarchy.roles' => [

            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'enqueue.transport.default.receive_timeout' => 10000,
            'enqueue.client.default.router_processor' => 'enqueue.client.default.router_processor',
            'enqueue.client.default.router_queue_name' => 'default',
            'enqueue.client.default.default_queue_name' => 'default',
            'enqueue.transports' => [
                0 => 'default',
            ],
            'enqueue.clients' => [
                0 => 'default',
            ],
            'enqueue.default_transport' => 'default',
            'enqueue.default_client' => 'default',
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.http_client' => [
                    0 => 'http_client',
                    1 => '@WebProfiler/Collector/http_client.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'data_collector.messenger' => [
                    0 => 'messenger',
                    1 => '@WebProfiler/Collector/messenger.html.twig',
                ],
                'mailer.data_collector' => [
                    0 => 'mailer',
                    1 => '@WebProfiler/Collector/mailer.html.twig',
                ],
                'enqueue.profiler.message_queue_collector' => [
                    0 => 'enqueue.message_queue',
                    1 => '@Enqueue/Profiler/panel.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [

            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
