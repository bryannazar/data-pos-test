<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Auth{
/**
 * App\Models\Auth\Permission
 *
 * @property-read string $title
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Auth\Role> $roles
 * @method static \Illuminate\Database\Eloquent\Builder|Permission action($action = 'read')
 * @method static \Illuminate\Database\Eloquent\Builder|Permission collect($sort = 'display_name')
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission usingSearchString($string)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\Role
 *
 * @property-read array $line_actions
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Auth\Permission> $permissions
 * @method static \Illuminate\Database\Eloquent\Builder|Role collect($sort = 'display_name')
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Role usingSearchString($string)
 */
	class Role extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\UserCompany
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Auth\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCompany newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCompany newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCompany onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCompany query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCompany withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCompany withoutTrashed()
 */
	class UserCompany extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\UserDashboard
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Common\Dashboard|null $dashboard
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Common\Dashboard> $dashboards
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Auth\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDashboard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDashboard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDashboard onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDashboard query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDashboard withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDashboard withoutTrashed()
 */
	class UserDashboard extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\UserInvitation
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Auth\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInvitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInvitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInvitation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInvitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInvitation token($token)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInvitation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInvitation withoutTrashed()
 */
	class UserInvitation extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\UserRole
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Auth\Role|null $role
 * @property-read \App\Models\Auth\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole withoutTrashed()
 */
	class UserRole extends \Eloquent {}
}

namespace App\Models\Banking{
/**
 * App\Models\Banking\TransactionTax
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Setting\Tax|null $tax
 * @property-read \App\Models\Banking\Transaction|null $transaction
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax expense()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax expenseRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax expenseTransfer()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax income()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax incomeRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax incomeTransfer()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax isDocument()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax isNotDocument()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax isNotSplit()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax isNotTransfer()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax isSplit()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax isTransfer()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax type($types)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TransactionTax withoutTrashed()
 */
	class TransactionTax extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\ContactPerson
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Common\Contact|null $contact
 * @property-read mixed $initials
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson customer()
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson email($email)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson employee()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson type(array $types)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson vendor()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactPerson withoutTrashed()
 */
	class ContactPerson extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\ItemTax
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Common\Item|null $item
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Setting\Tax|null $tax
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemTax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemTax onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemTax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ItemTax withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ItemTax withoutTrashed()
 */
	class ItemTax extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Media
 *
 * @property-read string $basename
 * @property-read Media|null $originalMedia
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Media> $variants
 * @method static \Illuminate\Database\Eloquent\Builder|Media forPathOnDisk(string $disk, string $path)
 * @method static \Illuminate\Database\Eloquent\Builder|Media inDirectory(string $disk, string $directory, bool $recursive = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Media inOrUnderDirectory(string $disk, string $directory)
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media unordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereBasename(string $basename)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereIsOriginal()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereIsVariant(?string $variant_name = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Media withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Media withoutTrashed()
 */
	class Media extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Notification
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $notifiable
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> all($columns = ['*'])
 * @method static \Illuminate\Notifications\DatabaseNotificationCollection<int, static> get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseNotification read()
 * @method static \Illuminate\Database\Eloquent\Builder|DatabaseNotification unread()
 */
	class Notification extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Recurring
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \Plank\Mediable\MediableCollection<int, \App\Models\Document\Document> $documents
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $recurable
 * @property-read \Plank\Mediable\MediableCollection<int, \App\Models\Banking\Transaction> $transactions
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring active()
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring bill()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring completed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring document($type)
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring ended()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring expenseTransaction()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring incomeTransaction()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring invoice()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring transaction()
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Recurring withoutTrashed()
 */
	class Recurring extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Report
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read string $alias
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Report alias($alias)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Report class($class)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Report expenseSummary()
 * @method static \Illuminate\Database\Eloquent\Builder|Report incomeExpenseSummary()
 * @method static \Illuminate\Database\Eloquent\Builder|Report incomeSummary()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Report newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Report newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Report onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Report profitLoss()
 * @method static \Illuminate\Database\Eloquent\Builder|Report query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Report taxSummary()
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Report withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Report withoutTrashed()
 */
	class Report extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentHistory
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Document\Document|null $document
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory bill()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory billRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory invoice()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory invoiceRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory status(string $status)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory type(string $type)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentHistory withoutTrashed()
 */
	class DocumentHistory extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentItem
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Document\Document|null $document
 * @property-read string $discount
 * @property-read mixed $discount_rate
 * @property-read \App\Models\Common\Item|null $item
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Document\DocumentItemTax> $taxes
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem bill()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem billRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem invoice()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem invoiceRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem type(string $type)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItem withoutTrashed()
 */
	class DocumentItem extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentItemTax
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Document\Document|null $document
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Setting\Tax|null $tax
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax bill()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax billRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax invoice()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax invoiceRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax type(string $type)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentItemTax withoutTrashed()
 */
	class DocumentItemTax extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentTotal
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Document\Document|null $document
 * @property-read mixed $title
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal bill()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal billRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal code($code)
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal invoice()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal invoiceRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal type(string $type)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentTotal withoutTrashed()
 */
	class DocumentTotal extends \Eloquent {}
}

namespace App\Models\Module{
/**
 * App\Models\Module\Module
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Module alias($alias)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Module withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Module withoutTrashed()
 */
	class Module extends \Eloquent {}
}

namespace App\Models\Module{
/**
 * App\Models\Module\ModuleHistory
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Module\Module|null $module
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleHistory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleHistory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ModuleHistory withoutTrashed()
 */
	class ModuleHistory extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\EmailTemplate
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read mixed $group
 * @property-read mixed $title
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate alias($alias)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate moduleAlias($alias)
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailTemplate withoutTrashed()
 */
	class EmailTemplate extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\Setting
 *
 * @property-read \App\Models\Common\Company|null $company
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Model account($accounts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model allCompanies()
 * @method static \Illuminate\Database\Eloquent\Builder|Model collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \Illuminate\Database\Eloquent\Builder|Model companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Model contact($contacts)
 * @method static \Illuminate\Database\Eloquent\Builder|Model dateFilter(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Model disableCache()
 * @method static \Illuminate\Database\Eloquent\Builder|Model disabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model enabled()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isNotRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Model isRecurring()
 * @method static \Illuminate\Database\Eloquent\Builder|Model moduleEnabled(string $module)
 * @method static \Illuminate\Database\Eloquent\Builder|Model monthsOfYear(string $field)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting prefix($prefix = 'company')
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model reconciled($value = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Model sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Model usingSearchString(?string $string = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting withoutTrashed()
 */
	class Setting extends \Eloquent {}
}

