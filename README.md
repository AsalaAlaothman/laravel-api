                                            ####################
                                            ### RestFull API ###
                                            ####################

## Description

    Contains two modules Customer & Invoice modules, and contains the relation between these modules, with using SoftDeletes, Create Factories to add fake data to tables.

## Setup DataBase

    .env File =>    DataBase Configuration.

## Create Module

    Module ==>  1. Model.
                2. Controller.
                3. Factory.
                4. Seeder.
                5. Policy.
                6. Store Request.
                7. Update Request.

            php artisan make:model ModelName --all

## Relations:

1. Customer hasMany Invoices.
2. Invoice belongsTo Customer.

##  Resources & Collections & requests

## Using Query String for filtering data.
    1. create Class for filtering:
        * exists at  "App/Filters/V1" namespace.
        *. Contains: 
            $safeParamete Array => allowed column user can filtering by them with the operators those  allow to used. 
            $columnMap Array => using to map safeParameter with actual columns name.
            $operatorMap Array =>using to map operator user in $safeparameter array.
            transform function => filtering function.

## API PostMan Collection => https://documenter.getpostman.com/view/15616329/2s8Z73zBRS
.
