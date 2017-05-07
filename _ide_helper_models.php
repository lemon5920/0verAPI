<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\DepartmentApplicationDocument
 *
 */
	class DepartmentApplicationDocument extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\SystemData
 *
 */
	class SystemData extends \Eloquent {}
}

namespace App{
/**
 * App\SchoolData
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\DepartmentData[] $departments
 */
	class SchoolData extends \Eloquent {}
}

namespace App{
/**
 * App\SchoolUserEditableDept
 *
 */
	class SchoolUserEditableDept extends \Eloquent {}
}

namespace App{
/**
 * App\SystemTypes
 *
 */
	class SystemTypes extends \Eloquent {}
}

namespace App{
/**
 * App\SchoolUserRole
 *
 */
	class SchoolUserRole extends \Eloquent {}
}

namespace App{
/**
 * App\SchoolUser
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
	class SchoolUser extends \Eloquent {}
}

namespace App{
/**
 * App\GraduateDepartmentData
 *
 */
	class GraduateDepartmentData extends \Eloquent {}
}

namespace App{
/**
 * App\Role
 *
 */
	class Role extends \Eloquent {}
}

namespace App{
/**
 * App\ApplicationDocumentType
 *
 */
	class ApplicationDocumentType extends \Eloquent {}
}

namespace App{
/**
 * App\Locale
 *
 */
	class Locale extends \Eloquent {}
}

namespace App{
/**
 * App\DepartmentData
 *
 * @property-read \App\SchoolData $user
 */
	class DepartmentData extends \Eloquent {}
}

namespace App{
/**
 * App\TwoYearTechDepartmentData
 *
 */
	class TwoYearTechDepartmentData extends \Eloquent {}
}

