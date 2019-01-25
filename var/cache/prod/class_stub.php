<?php

class PrestaShopBackup extends PrestaShopBackupCore {};
class Tag extends TagCore {};
class Uploader extends UploaderCore {};
class ImageType extends ImageTypeCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class Module extends ModuleCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
class Access extends AccessCore {};
class Category extends CategoryCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceKey extends WebserviceKeyCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class GroupReduction extends GroupReductionCore {};
class Profile extends ProfileCore {};
class ProductSale extends ProductSaleCore {};
class Connection extends ConnectionCore {};
class Manufacturer extends ManufacturerCore {};
class Group extends GroupCore {};
class Context extends ContextCore {};
class Gender extends GenderCore {};
class FeatureValue extends FeatureValueCore {};
class Tab extends TabCore {};
class Attachment extends AttachmentCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
abstract class ObjectModel extends ObjectModelCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class DbQuery extends DbQueryCore {};
class DbMySQLi extends DbMySQLiCore {};
class DbPDO extends DbPDOCore {};
abstract class Db extends DbCore {};
class Search extends SearchCore {};
class Risk extends RiskCore {};
class OrderReturn extends OrderReturnCore {};
class Order extends OrderCore {};
class OrderCartRule extends OrderCartRuleCore {};
class OrderState extends OrderStateCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderSlip extends OrderSlipCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderDetail extends OrderDetailCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderMessage extends OrderMessageCore {};
class Country extends CountryCore {};
class State extends StateCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class Meta extends MetaCore {};
class ProductAssembler extends ProductAssemblerCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class FormField extends FormFieldCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class Employee extends EmployeeCore {};
class Tools extends ToolsCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class Controller extends ControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class RangePrice extends RangePriceCore {};
class RangeWeight extends RangeWeightCore {};
class Referrer extends ReferrerCore {};
class Mail extends MailCore {};
class Language extends LanguageCore {};
class Windows extends WindowsCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class ImageManager extends ImageManagerCore {};
class Notification extends NotificationCore {};
class LocalizationPack extends LocalizationPackCore {};
class CMSCategory extends CMSCategoryCore {};
class PDF extends PDFCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class Cookie extends CookieCore {};
class SpecificPrice extends SpecificPriceCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Dispatcher extends DispatcherCore {};
class CustomizationField extends CustomizationFieldCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class StockMvtReason extends StockMvtReasonCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class Warehouse extends WarehouseCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class StockMvt extends StockMvtCore {};
class StockMvtWS extends StockMvtWSCore {};
class StockManager extends StockManagerCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class SupplyOrder extends SupplyOrderCore {};
class Stock extends StockCore {};
class StockAvailable extends StockAvailableCore {};
class CustomerAddress extends CustomerAddressCore {};
class Hook extends HookCore {};
class CartRule extends CartRuleCore {};
class SupplierAddress extends SupplierAddressCore {};
class Page extends PageCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Configuration extends ConfigurationCore {};
class CMS extends CMSCore {};
class DateRange extends DateRangeCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class PhpEncryption extends PhpEncryptionCore {};
class LinkProxy extends LinkProxyCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Customer extends CustomerCore {};
class Supplier extends SupplierCore {};
class Attribute extends AttributeCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class AddressValidator extends AddressValidatorCore {};
class CartChecksum extends CartChecksumCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CheckoutSession extends CheckoutSessionCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class Alias extends AliasCore {};
class CSV extends CSVCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Feature extends FeatureCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class Validate extends ValidateCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class FileUploader extends FileUploaderCore {};
class CMSRole extends CMSRoleCore {};
class Product extends ProductCore {};
class Link extends LinkCore {};
class Translate extends TranslateCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class Tax extends TaxCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxRule extends TaxRuleCore {};
class RequestSql extends RequestSqlCore {};
class StylesheetManager extends StylesheetManagerCore {};
class CssMinifier extends CssMinifierCore {};
class JsMinifier extends JsMinifierCore {};
class JavascriptManager extends JavascriptManagerCore {};
class CccReducer extends CccReducerCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class CustomerThread extends CustomerThreadCore {};
class Curve extends CurveCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperList extends HelperListCore {};
class HelperForm extends HelperFormCore {};
class Helper extends HelperCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperView extends HelperViewCore {};
class HelperKpi extends HelperKpiCore {};
class HelperShop extends HelperShopCore {};
class HelperCalendar extends HelperCalendarCore {};
class ShopGroup extends ShopGroupCore {};
class ShopUrl extends ShopUrlCore {};
class Shop extends ShopCore {};
class Zone extends ZoneCore {};
class Combination extends CombinationCore {};
class AddressChecksum extends AddressChecksumCore {};
class Store extends StoreCore {};
class CustomerMessage extends CustomerMessageCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class Media extends MediaCore {};
class Address extends AddressCore {};
class AddressFormat extends AddressFormatCore {};
class Delivery extends DeliveryCore {};
class Currency extends CurrencyCore {};
class Customization extends CustomizationCore {};
class Guest extends GuestCore {};
class AttributeGroup extends AttributeGroupCore {};
class QuickAccess extends QuickAccessCore {};
class Cart extends CartCore {};
class Contact extends ContactCore {};
class Pack extends PackCore {};
class Image extends ImageCore {};
class ProductSupplier extends ProductSupplierCore {};
class Chart extends ChartCore {};
class Upgrader extends UpgraderCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class Tree extends TreeCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class TreeToolbar extends TreeToolbarCore {};
class Message extends MessageCore {};
class Carrier extends CarrierCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class ThemeLang extends ThemeLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class MetaLang extends MetaLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class CategoryLang extends CategoryLangCore {};
class DataLang extends DataLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class FeatureLang extends FeatureLangCore {};
class GenderLang extends GenderLangCore {};
class RiskLang extends RiskLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class ContactLang extends ContactLangCore {};
class GroupLang extends GroupLangCore {};
class AttributeLang extends AttributeLangCore {};
class ProfileLang extends ProfileLangCore {};
class CarrierLang extends CarrierLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class TabLang extends TabLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheApc extends CacheApcCore {};
class CacheXcache extends CacheXcacheCore {};
abstract class Cache extends CacheCore {};
class SearchEngine extends SearchEngineCore {};
class ProductDownload extends ProductDownloadCore {};
