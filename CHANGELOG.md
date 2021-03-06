CHANGELOG for Sulu CMF
======================

* dev-develop
    * FEATURE     #722 [ClientBundle]   Add Dependency Injection
    * ENHANCEMENT #699 [ContentBundle]  Add single internal link and checkbox to example
    * ENHANCEMENT #777 [ContentBundle]  Enable "copy language" on startpage 

* 0.14.1 (2015-01-21)
    * HOTFIX      #737 [MediaBundle]    Changed BaseCollection properties to be protected for inheritance

* 0.14.0 (2015-01-15)
    * ENHANCEMENT #695 [ContentBundle]  Hide textblock sort option when there is only 1 textblock available
    * FEATURE     #634 [AdminBundle]    Created new configuration component, added new configuration for autocomplete
    * BUGFIX      #681 [TagBundle]      Fixed filtering of tags in Tag list and Media edit Overlay
    * BUGFIX      #681 [MediaBundle]    Fixed imagick detection
    * FEATURE     #581 [SearchBundle]   Structures deindexed on delete
    * FEATURE     #581 [Content]        NODE_SAVE renamed to NODE_POST_SAVE
    * FEATURE     #581 [Content]        New events: NODE_PRE_DELETE, NODE_POST_DELETE
    * FEATURE     #634 [AdminBundle]    Created new configuration component, added new configuration for autocomplete
                                        and refactored usage of autocomplete
    * BUGFIX      #627 [ContentBundle]  Fixed damaged urls when moving/copy/rename
    * ENHANCEMENT #639 [AdminBundle]    Save page size for datagrid
    * FEATURE     #659 [MediaBundle]    Configurable image quality settings
    * ENHANCEMENT #644 [AdminBundle]    Displaying an error label everytime a request fails
    * ENHANCEMENT #665 [SecurityBundle] Added role creation command and question for role in user creation
    * FEATURE     #662 [SnippetBundle]  Applied security
    * FEATURE     #662 [CategoryBundle] Applied security
    * FEATURE     #662 [TagBundle]      Applied security
    * BUGFIX      #654 [ContentBundle]  Added dummy request to request stack for preview rendering.
                                        This is important when template uses ESI
    * BUGFIX      #661 [WebsiteBundle]  Added published date to resolver
    * BUGFIX      #655 [ContentBundle]  Fixed checkbox read for preview

* 0.13.2 (2014-12-12)

    * HOTFIX      #--- [AdminBundle]    Fixed globalize loading issue
    * HOTFIX      #--- [AdminBundle]    Fixed datagrid destroy method (remove window resize listener)

* 0.13.1 (2014-12-11)
    * HOTFIX      #--- [AdminBundle]    Added missing frontend (css/js) build

* 0.13.0 (2014-12-10)

    * HOTFIX      #619 [MediaBundle]    Made web folder for format cache configurable
    * FEATURE     #637 [WebsiteBundle]  Multisort method and Twig filter
    * FEATURE     #585 [ContentBundle]  Added analytics key to webspace configuration
    * BUGFIX      #612 [SnippetBundle]  Introduced snippet pagination
    * BUGFIX      #544 [ContentBundle]  Fixed PHPCR Format Value switches
    * ENHANCEMENT #599 [ContentBundle]  Moved cache for preview from phpcr to filesystem
    * BUGFIX      #632 [SecurityBundle] Fixed language changer for admin
    * BUGFIX      #633 [SnippetBundle]  Load snippets always in requested language (except there is no translation and
                                        the page is a shadow then use this language)
* 0.12.0 (2014-11-25)

    * HOTFIX      #594 [WebsiteBundle]  Fixed sitemap alternate link bugs
    * BUGFIX      #609 [All]            Allows null value for security subject and fixed snippet internal links bug
    * ENHANCEMENT #577 [All]            Applied security to navigation items and content tabs
    * ENHANCEMENT #604 [CoreBundle]     Only register services for the current context
    * ENHANCEMENT #--- [Tests]          Fixed output colors for Mac users
    * BUGFIX      #571 [CoreBundle]     Fixed build command
    * ENHANCEMENT #556 [MediaBundle]    Enhanced url generation for collections
    * ENHANCEMENT #535 [SecurityBundle] Added SecurityListener and secured Content, Media and Security
    * BUGFIX      #568 [SnippetBundle]  Added template to view for Snippets
    * ENHANCEMENT #539 [AdminBundle]    Added validation for iban and vat numbers from the eu
    * HOTFIX      #559 [CoreBundle]     Workaround upstream reg. in DoctrinePHPCRBundle, which causes
                                        eager validation of workspace existence.
    * ENHANCEMENT #523 [All]            Refactored and improved functional tests
    * FEATURE     #553 [SnippetBundle]  Possiblity to show all snippet types by not providing any
    * BUGFIX      #533 [CoreBundle]     Removed request_analyzer.enable option (it is now irrelevant)
    * FEATURE     #563 [CoreBundle]     Introduced LocalizationProviders to offer the possibility to
    * BUGFIX      #563 [SecurityBundle] Showing correct localizations in UserRole-Assignment in
                                        Permission-Tab
    * FEATURE     #564 [ContentBundle]  Added UI to copy content languages
    * HOTFIX      #559 [CoreBundle]     Workaround upstream reg. in DoctrinePHPCRBundle, which causes
                                        eager validation of workspace existence.
    * ENHANCEMENT #523 [All]            Refactored and improved functional tests
    * BUGFIX      #597 [ContentBundle]  Reconnect to mysql if connection gone away in websocket
    * FEATURE     #368 [SnippetBundle]  Added `sulu:snippet:locale-copy`-command

* 0.11.2 (2014-11-17)

    * HOTFIX #559 [CoreBundle]    Workaround upstream reg. in DoctrinePHPCRBundle, which causes
                                  eager validation of workspace existence.
* 0.11.1 (2014-11-13)

    * HOTFIX #543 [SearchBundle]  Fixed re-index command
    * HOTFIX #551 [SearchBundle]  Switched to test adapter for tests
    * HOTFIX #549 [ContentBundle] Fixed page URL fetching for internal links used in snippets
    * HOTFIX #512 [MediaBundle]   Only show Media from specific selected Collection
    * HOTFIX #550 [MediaBundle]   Deleted Media do not throw Exception when page is saved

* 0.11.0 (2014-11-12)

    * BUGFIX      #540                 Real url in requested language (navigation, ...) for shadows
    * ENHANCEMENT #523 [ContentBundle] Prefix ContentBundle template path
    * BUGFIX      #531 [ContentBundle] Fixed single internal link freeze
    * BUGFIX      #529 [MediaBundle]   Display sorted Collections in overlay
    * FEATURE     #536 [MediaBundle]   Added Configurable display options for media-selection
    * ENHANCEMENT #361 [WebsiteBundle] Read urls for pages in all languages
    * ENHANCEMENT #526 [WebsiteBundle] Added Template var to resolver (Twig-Template)
    * ENHANCEMENT #528 [WebsiteBundle] Added memoize service to cache data and use it in twig extension
    * ENHANCEMENT #524 [ContentBundle] Prefix ContentBundle template path
    * BUGFIX      #518 [ContentBundle] Ordering of page changed when node is renamed
    * FEATURE     #511 [SnippetBundle] Ask confirmation when deleting Snippets which are referenced by content

* 0.10.2 (2014-11-07)

    * HOTFIX #509 [ContentBundle] Fixed cached data bug in smart-content

* 0.10.1 (2014-11-04)

* 0.10.0 (2014-11-03)
