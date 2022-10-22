# Arithmetic Operations

This is an abstraction package including an interface for arithmetic operations, that can be implemented in 'implementation' packages.

## Building your own implementation

If you want to contribute an implementation of the arithmetic-operations, you can easily do so. If you want to implement the interface in the package, you need to depend on the package itself by adding it to the 'require' section;

```shell
composer require prinsfrank/arithmetic-operations
```

After that, you want to make sure that packagist understands that you are implementing the Virtual Package 'prinsfrank/arithmetic-operations-implementation' and listing the package under the Virtual Package. You can do so, by adding the package to the 'provides' section. After pushing the package to packagist it should appear under the [Virtual Package here](https://packagist.org/providers/prinsfrank/arithmetic-operations-implementation)

## Adding a dependency to an implementation to your composer package

When you as a package maintainer want to let people choose between different arithmetic operation implementations, you can require 'prinsfrank/arithmetic-operations-implementation' as a dependency. Note the '-implementation' on the end. This is a so called 'virtual package'. 

If you added a direct dependency to the 'prinsfrank/arithmetic-operations' package, this would result in only the interface being installed. Instead, making use of the Virtual Package prompts the developer to choose an implementation.

Virtual packages are listed on packagist as [a list of their implementations](https://packagist.org/providers/prinsfrank/arithmetic-operations-implementation).

## Installing an implementation when it is required by a package

When installing a package that requires an implementation of this package, composer will give an error and a choice here. For example, when requiring the package prinsfrank/measurement-unit with the following command:

```shell
composer require prinsfrank/measurement-unit
```

Without first installing an implementation of this package, the following error will be shown:

```
In PackageDiscoveryTrait.php line 379:
  Could not find a matching version of package prinsfrank/measurement-unit. Check the package spelling, your version constraint and that the package is available in a stability which matches your minimum-stability (stable).         
    - prinsfrank/measurement-unit v0.1 requires prinsfrank/arithmetic-operations-implementation ^0.1 -> could not be found in any version, but the following packages provide it:
      - prinsfrank/arithmetic-operations-bcmath BCMath implementation for the prinsfrank/arithmetic-operations interface that provides basic arithme
      - prinsfrank/arithmetic-operations-floating-point Floating point math implementation for the prinsfrank/arithmetic-operations interface that provides
      Consider requiring one of these to satisfy the prinsfrank/arithmetic-operations-implementation requirement.
```

To fix this, choose one of the suggested packages, and require the package you want to add as follows, where you require both packages at the same time:

```shell
composer require prinsfrank/measurement-unit prinsfrank/arithmetic-operations-floating-point
```
