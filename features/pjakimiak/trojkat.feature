Feature: Obliczenia

  Scenario: Trojkat
    Given I am on homepage
    When I follow "Trojkat by pjakimiak"
    And I fill in "a" with "1"
    And I fill in "b" with "2"
    And I fill in "c" with "0.5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 1"