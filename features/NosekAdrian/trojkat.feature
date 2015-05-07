Feature: Obliczenia

  Scenario: Kalkulator trojkata
    Given I am on homepage
    When I follow "Kalkulator NosekAdrian"
    And I fill in "a" with "5"
    And I fill in "b" with "10"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 25"