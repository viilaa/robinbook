<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
require __DIR__.'/ContainerCAVrBwH/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerCAVrBwH/EntityManager_9a5be93.php';
require __DIR__.'/ContainerCAVrBwH/getSession_Storage_NativeService.php';
require __DIR__.'/ContainerCAVrBwH/getSessionService.php';
require __DIR__.'/ContainerCAVrBwH/getServicesResetterService.php';
require __DIR__.'/ContainerCAVrBwH/getSecrets_VaultService.php';
require __DIR__.'/ContainerCAVrBwH/getRouting_LoaderService.php';
require __DIR__.'/ContainerCAVrBwH/getPropertyAccessorService.php';
require __DIR__.'/ContainerCAVrBwH/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerCAVrBwH/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerCAVrBwH/getForm_Type_FormService.php';
require __DIR__.'/ContainerCAVrBwH/getForm_Type_EntityService.php';
require __DIR__.'/ContainerCAVrBwH/getForm_Type_ColorService.php';
require __DIR__.'/ContainerCAVrBwH/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerCAVrBwH/getForm_RegistryService.php';
require __DIR__.'/ContainerCAVrBwH/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerCAVrBwH/getErrorControllerService.php';
require __DIR__.'/ContainerCAVrBwH/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerCAVrBwH/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerCAVrBwH/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerCAVrBwH/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerCAVrBwH/getDoctrineService.php';
require __DIR__.'/ContainerCAVrBwH/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerCAVrBwH/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerCAVrBwH/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerCAVrBwH/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerCAVrBwH/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerCAVrBwH/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerCAVrBwH/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerCAVrBwH/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerCAVrBwH/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerCAVrBwH/getCache_SystemClearerService.php';
require __DIR__.'/ContainerCAVrBwH/getCache_SystemService.php';
require __DIR__.'/ContainerCAVrBwH/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerCAVrBwH/getCache_AppClearerService.php';
require __DIR__.'/ContainerCAVrBwH/getCache_AppService.php';
require __DIR__.'/ContainerCAVrBwH/getCache_AnnotationsService.php';
require __DIR__.'/ContainerCAVrBwH/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerCAVrBwH/getAnnotations_CachedReaderService.php';
require __DIR__.'/ContainerCAVrBwH/getAnnotations_CacheService.php';
require __DIR__.'/ContainerCAVrBwH/getTemplateControllerService.php';
require __DIR__.'/ContainerCAVrBwH/getRedirectControllerService.php';
require __DIR__.'/ContainerCAVrBwH/getUsersRepositoryService.php';
require __DIR__.'/ContainerCAVrBwH/getGenreRepositoryService.php';
require __DIR__.'/ContainerCAVrBwH/getBookRepositoryService.php';
require __DIR__.'/ContainerCAVrBwH/getBookTypeService.php';
require __DIR__.'/ContainerCAVrBwH/getUsersControllerService.php';
require __DIR__.'/ContainerCAVrBwH/getRootDirControllerService.php';
require __DIR__.'/ContainerCAVrBwH/getGenreControllerService.php';
require __DIR__.'/ContainerCAVrBwH/getBookControllerService.php';
require __DIR__.'/ContainerCAVrBwH/get_ServiceLocator_YxNo8ZPService.php';
require __DIR__.'/ContainerCAVrBwH/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerCAVrBwH/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerCAVrBwH/get_ServiceLocator_5nX7ca3Service.php';
require __DIR__.'/ContainerCAVrBwH/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerCAVrBwH/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerCAVrBwH/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerCAVrBwH/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\BookController';
$classes[] = 'App\Controller\GenreController';
$classes[] = 'App\Controller\RootDirController';
$classes[] = 'App\Controller\UsersController';
$classes[] = 'App\Form\BookType';
$classes[] = 'App\Repository\BookRepository';
$classes[] = 'App\Repository\GenreRepository';
$classes[] = 'App\Repository\UsersRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$classes[] = 'Symfony\\Component\\Routing\\Annotation\\Route';
$classes[] = 'Doctrine\\ORM\\Mapping\\Entity';
$classes[] = 'Doctrine\\ORM\\Mapping\\Id';
$classes[] = 'Doctrine\\ORM\\Mapping\\GeneratedValue';
$classes[] = 'Doctrine\\ORM\\Mapping\\Column';
$classes[] = 'Doctrine\\ORM\\Mapping\\ManyToMany';
Preloader::preload($classes);
